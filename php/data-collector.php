<?php
/*
    Muss session_start() vor dem Gebrauch von $_SESSION ausgeführt werden.
    Am Besten ganz am Anfang einer Webseite, bevor irgendwelche andere 
    PHP-Skripte ausgeführt werden.

    Auf der index.php-Seite wird die Session zurückgesetzt und frisch
    gestartet, damit die Umfrage von Vorne wiederholt werden kann.
*/
session_start();

if (str_contains($_SERVER['SCRIPT_NAME'], "index.php")) {
    session_destroy();
    session_start();
}

// Hilfswerkzeuge laden (prettyPrint)
include 'tools.php';

if (isset($_POST["questionIndex"])) {
    // Baue den Schlüssel für die letzte Frage.
    $lastQuestionID = "question-" . $_POST["questionIndex"];

    // Speichere alle Daten des letzen Posts mit den Namen $lastPageID in der Session.
    $_SESSION[$lastQuestionID] = $_POST;
}

// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
// prettyPrint($_SERVER['SCRIPT_NAME']);
// prettyPrint($_SESSION);

?>





<?php
// Muss vor dem Gebrauch von $_SESSION ausgeführt werden.
session_start();

// Hole den Namen der letzten Seite aus $_POST.
$lastPageID = $_POST["lastPageID"];

// Speichere alle Daten des letzen Posts mit den Name $lastPageID in der Session.
$_SESSION[$lastPageID] = $_POST;

// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
<?php 
include 'tools.php';

// Muss vor dem Gebrauch von $_SESSION ausgeführt werden.
session_start();

// Hole den Namen der letzten Seite aus $_POST.
if (isset($_POST["lastPageID"])) $lastPageID = $_POST["lastPageID"];
else $lastPageID = null;

// Speichere alle Daten des letzen Posts mit den Name $lastPageID in der Session.
$_SESSION[$lastPageID] = $_POST;

// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
prettyPrint($_SESSION);
?>
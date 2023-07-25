<?php 
/* Dieses Skript ist für Testzwecke. */
echo "Good Morning - lets make errors!<br>";

// Syntax-Errors
// $cars = ['Bentley', 'Volvo", 'VW'];

// Nicht existierende Variablen
// if ($car === 'Volvo') {echo 'I like Volvo!';}

// Nicht existierende Array-Schlüssel (Keys)
$persons = [
    "Peter" => "Peter Muster",
    "Fritz" => "Fritz Müller"
];

// echo $persons["Petra"];

// Logische Fehler: SELBER WERTE ANZEIGEN!
$p = 'Affe';

// echo "$" . "p" . " = " . $p . "<br>";
// echo '$p' . " = " . $p . "<br>";
echo "\$p = $p<br>";

if ($p > 100) {
    echo "Ja.";
}
else {
    echo "Nein.";
}














?>
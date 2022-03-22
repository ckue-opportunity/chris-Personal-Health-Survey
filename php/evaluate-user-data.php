<?php 

/*
    Frage 1 'index'

    [index] => Array
        (
            [range-slider] => 4
            [lastPageID] => index
            [range-slider-changed] => 1
    )

    Achtung: Zuerst prüfen, ob ein Schlüssel-Wert überhaupt gesetzt ist,
             sonst reagiert PHP mit einem Fehler.

             Die Funktion dazu: isset()

    Der Range Slider liefert Dezimalwerte von 0 bis 5 - als String, wie
    zum Beispiel "2.5".

    Ich benötige nur ganze Zahlen, also brauche ich die Funktion intval().
*/
$totalPoints = 0;

if (isset($_SESSION['index'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['index'];

    // DEVONLY
    echo "\$post = $post<br>"; // "\$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion1 = $post['range-slider']; 
        
        // DEVONLY
        echo "\$valueQuestion1 = $valueQuestion1<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion1 = intval($valueQuestion1); 

        if ($valueQuestion1 > 3) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }
}

// question-3 ----------------------------------------------------------------------

if (isset($_SESSION['question-3'])) { 
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-3'];

    if (isset($post['checkboxValues'])) {
        // Liste der gewählten Checkboxen als String.
        $checkboxValues = $post['checkboxValues'];

        // Konvertiere String zum Array - siehe auch https://www.php.net/manual/de/function.explode.php
        $array = explode(',', $checkboxValues);

        // Wurde "Boat" angewählt?
        // in_array(mixed $needle, array $haystack, bool $strict = false): bool
        if (in_array('Boat', $array, true)) {
            // DEVONLY
            echo "Yes! You are in the boat.<br>";
        }

        // DEVONLY
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

?>
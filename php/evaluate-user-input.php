<?php
/*
    Evaluiere die vom Benutzer eingegebenen und in $_SESSION gespeicherten Werte
    und bereite daraus die Variablen für den Feedback-Text vor.

    Gehe von Frage zu Frage, berechne jeweils aus den Benutzereingaben die erreichten
    "Gesunheitspunkte". Bilde die Summe aus den Gesundheitspunkten und beurteile
    anhand von Schwellenwerten, ob der Benutzer "ungesund", "einigermassen gesund" 
    oder "sehr gesund" lebt.
*/
include "questions.php";
$totalPoints = 0;

// prettyPrint($_SESSION);

foreach (QUESTIONS as $i => $data) { // In $data kommen die Originaldaten einer Frage.
    // Hole die Benutzereingaben aus der Session.
    $questionKey = "question-$i";

    if (isset($_SESSION[$questionKey])) {
        $userInput = $_SESSION[$questionKey];
    }

    // Je nach Fragetyp: Bestimme den vom Benutzer gewählten Antwort-Wert.
    $points = 0;

    switch($data["type"]) {
        case "range": // ----------------------------------------
            $value = $userInput["range-slider"];
            break;
    
        case "radio": // ----------------------------------------
            if ($userInput["single-choice"] === $data["healthy-value"]) $value = 1;
            else $value = 0;
            break;

        case "checkbox": // -------------------------------------
            $value = countSelectedCheckboxes($userInput);
            break;

        case "number": // ---------------------------------------
            $value = $userInput["times-per-day"];
            break;

    }

    // Berechne die Punkte aus dem Antwort-Wert.
    $points = pointsInRange($data, $value);

    // Addiere die Punkte zum Punktetotal.
    // Damit lässt sich ein Maximum von 33 Punkten erreichen.
    $totalPoints = $totalPoints + $points; // dasselbe wie: $totalPoints++;

    // DEVONLY
    // echo "<p>$questionKey: points = $points (\$value=$value)</p>";
}

// Bestimme die Anzahl der gewählten Checkboxen.
function countSelectedCheckboxes($userInput) {
    $needle = "chbox-";
    $counter = 0;

    foreach($userInput as $key => $value) {
        if (str_contains($key, $needle)) $counter++;
    }

    return $counter;
}

// Berechne die Punkte aus gegebenem Wert und vorbestimmten Wertebereich. 
function pointsInRange($data, $value) {
    $healthyRange = $data["healthy-range"];
    $healthyPoints = $data["healthy-points"];

    if ($healthyRange[0] <= $value && $value <= $healthyRange[1]) {
        return $healthyPoints;
    }
    else return 0;
}

?>
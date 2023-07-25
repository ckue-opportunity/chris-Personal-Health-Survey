<?php
    include "questions.php";

    // Hole die Daten der Frage aus der Hauptliste ($questions array).
    $data = nextQuestionData();
    // prettyPrint($data); // DEVONLY

    switch($data["type"]) {
        case "range":
            include "template-range-slider.php";
            break;
    
        case "radio":
            include "template-radio-buttons.php";
            break;

        case "checkbox":
            include "template-checkboxes.php";
            break;

        case "number":
            include "template-number.php";
            break;

    }
?>
<?php

// Hauptliste aller Fragen, Antworten und sonstigen Datenelemente
// Damit lässt sich ein Maximum von 33 Punkten erreichen.
$questions = array(
    array(
        "question-text" => "Wie gesund bist du körperlich?",
        "instruction"   => "Schätze deine Gesundheit mit dem Slider ein.",
        "type"          => "range",
        "min"           => -1,
        "max"           => 5,
        "value"         => -1,
        "labels"        => array("ungesund", "soso lala", "sehr gesund"), 
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(3, 5),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "Nimmst du Nahrungsergänzungsmittel?",
        "type"          => "radio",
        "values"        => array(
                            "Nein", "Ja"
        ),
        // Gemessener Wert (Nein, Ja) zu Punkten umrechnen
        "healthy-value" => "Ja",
        "healthy-range" => array(1, 1),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "Wie wichtig ist köperliche Aktivität für dich?",
        "type"          => "range",
        "min"           => -1,
        "max"           => 5,
        "value"         => -1,
        "labels"        => array("Überhaupt nicht wichtig", "", "Sehr wichtig"),
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(4, 5),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "Welche zusätzliche körperliche Aktivität betreibst du am meisten?",
        "type"          => "checkbox",
        "values"        => array(
                            /* Weglassen: "Keine zusätzliche körperliche Aktivität",
                               dafür keine Validierung */
                            "Gewichte heben",
                            "Gehen",
                            "Wandern",
                            "Joggen",
                            "Rennen",
                            "Schwimmen",
                            "Tanzen",
                            "Aerobics",
                            "Pilates",
                            "Team Sport"
                            ),
        // Gemessener Wert (Anzahl ausgewählte Aktivitäten) zu Punkten umrechnen
        "healthy-range" => array(1, 5),
        "healthy-points"=> 6
    ),
    array(
        "question-text" => "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
        "type"          => "range",
        "min"           => -1,
        "max"           => 5,
        "value"         => -1,
        "labels"        => array("Viel zu wenig", "gerade richtig", "viel zu viel"),
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(2, 4),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?",
        "type"          => "number",
        "label"         => "Anzahl pro Tag",
        "min"           => 0,
        "max"           => 10,
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(2, 3),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Protein?",
        "type"          => "number",
        "label"         => "Anzahl pro Tag",
        "min"           => 0,
        "max"           => 10,
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(2, 3),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?",
        "type"          => "number",
        "label"         => "Anzahl pro Tag",
        "min"           => 0,
        "max"           => 10,
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(1, 3),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Früchte?",
        "type"          => "number",
        "label"         => "Anzahl pro Tag",
        "min"           => 0,
        "max"           => 10,
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(1, 3),
        "healthy-points"=> 3
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?",
        "type"          => "number",
        "label"         => "Anzahl pro Tag",
        "min"           => 0,
        "max"           => 10,
        // Gemessener Wert zu Punkten umrechnen
        "healthy-range" => array(0, 1),
        "healthy-points"=> 3
    )
);

// und noch als globale Konstante
define("QUESTIONS", $questions);

function nextQuestionData() {
    // Hole die Laufnummer der letzten Frage aus $_POST.
    if (isset($_POST["questionIndex"])) {
        $questionIndex = $_POST["questionIndex"];
    }
    else {
        // Auf der index.php Seite gibt es noch keine $_POST Werte.
        $questionIndex = -1;
    }

    // Setze die Laufnummer auf die nächste Frage.
    $questionIndex = $questionIndex + 1;

    /*
        Hole die Fragedaten aus QUESTIONS und
        - füge die Laufnummer der Frage in die Daten ein, sowie
        - füge den Wert für das action-Attribut ein.
    */
    $data = QUESTIONS[$questionIndex];
    $data["questionIndex"] = $questionIndex;

    if ($questionIndex + 1 < count(QUESTIONS)) {
        $data["action"] = "/question.php";
    }
    else {
        $data["action"] = "/feedback.php";
    }

    // Gib die Daten zurück.
    return $data;
}

?>
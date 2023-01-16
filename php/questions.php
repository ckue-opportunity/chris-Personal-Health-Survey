<?php

$questions = array(
    "question-0" => array(
        "question-text" => "Wie gesund bist du körperlich?",
        "type"          => "range",
        "min"           => 1,
        "min-text"      => "Überhaupt nicht gesund",
        "max"           => 5,
        "max-text"      => "Extrem gesund",
        "step"          => 0.5  
    ),
    "question-1" => array(
        "question-text" => "Nimmst du Nahrungsergänzungsmittel?",
        "type"          => "radio",
        "values"        => array(
                            "Ja", "Nein"
                           )
    ),
    "question-2" => array(
        "question-text" => "Wie wichtig ist köperliche Aktivität für dich?",
        "type"          => "checkbox",
        "values"        => array(
                            "Keine zusätzliche körperliche Aktivität",
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
                           )
    ),
);

?>
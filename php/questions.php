<?php

$questions = array(
    "question-1" => array(
        "question-text" => "Wie gesund bist du körperlich?",
        "instruction"   => "Schätze deine Gesundheit mit dem Slider ein.",
        "type"          => "range",
        "min"           => 1,
        "min-text"      => "Überhaupt nicht gesund",
        "max"           => 5,
        "max-text"      => "Extrem gesund",
        "step"          => 0.5  
    ),
    "question-2" => array(
        "question-text" => "Nimmst du Nahrungsergänzungsmittel?",
        "type"          => "radio",
        "values"        => array(
                            "Ja", "Nein"
                           )
    ),
    "question-3" => array(
        "question-text" => "Wie wichtig ist köperliche Aktivität für dich?",
        "type"          => "range",
        "min"           => 1,
        "min-text"      => "Überhaupt nicht wichtig",
        "max"           => 5,
        "max-text"      => "Sehr wichtig",
        "step"          => 0.5  
    ),
    "question-4" => array(
        "question-text" => "Welche zusätzliche körperliche Aktivität betreibst du am meisten?",
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
    "question-5" => array(
        "question-text" => "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
        "type"          => "range",
        "min"           => 1,
        "min-text"      => "Viel zu wenig",
        "middle-text"   => "gerade richtig",
        "max"           => 5,
        "max-text"      => "viel zu viel",
        "step"          => 0.5 
    ),
    "question-6" => array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?",
        "type"          => "number",
        "min"           => 0
    ),
    "question-7" => array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Protein?",
        "type"          => "number",
        "min"           => 0
    ),
    "question-8" => array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?",
        "type"          => "number",
        "min"           => 0
    ),
    "question-9" => array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Früchte?",
        "type"          => "number",
        "min"           => 0
    ),
    "question-10" => array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?",
        "type"          => "number",
        "min"           => 0
    )
);

?>
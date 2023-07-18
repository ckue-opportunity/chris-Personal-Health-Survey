<?php
    include "questions.php";
    include "tools.php";

    // Hole die Laufnummer der letzten Frage aus $_POST.
    // Benötigt <input type="hidden" name="questionIndex" value="0"> 
    // im <form> Tag.
    if (isset($_POST["questionIndex"])) {
        $questionIndex = $_POST["questionIndex"];
    }
    else {
        // Auf der index.php Seite gibt es noch keine $_POST Werte.
        $questionIndex = -1;
    }

    // Setze die Laufnummer auf die nächste Frage.
    $questionIndex = $questionIndex + 1;

    // Hole die Daten der Frage aus der Hauptliste (QUESTIONS array).
    $data = QUESTIONS[$questionIndex];
    prettyPrint($data);
?>

<h7>Frage <?php echo $questionIndex + 1; ?></h7>
<h3><?php echo $data["question-text"]; ?></h3>

<form action="question-2.php" method="post" onsubmit="return validateRange('range-slider');">
    <p class="instruction"><?php echo $data["instruction"]; ?></p>

    <div class="row flex-nowrap" style="padding-left:16%">
        <div class="col">
            <p><?php echo $data["labels"][0]; ?></p>
        </div>
        <div class="col" style="text-align: center;">
            <p><?php echo $data["labels"][1]; ?></p>
        </div>
        <div class="col" style="text-align: right;">
            <p><?php echo $data["labels"][2]; ?></p>
        </div>
    </div>

    <input type="range" name="range-slider" id="range-slider" class="form-range" 
           min="<?php echo $data["min"]; ?>" 
           max="<?php echo $data["max"]; ?>" 
           value="<?php echo $data["value"]; ?>">
    <input type="hidden" name="questionIndex" value="0">
    <p id="validation-warning" class="warning"></p>
    <button type="submit" class="btn btn-primary">Next</button>

    <p class="spacer"></p>
</form>



<?php
    /*
        1. Kopie der Fragestellung in template-type.php übernehmen
        2. PHP-Tag an den Anfang der Seite einfügen.
        3. Im ersten PHP-Tag: Bereite die Fragedaten vor:
           Laufnummer aus $_POST und Fragedaten aus Hauptarray holen
           Testen und Daten mit prettyPrint anzeigen.
        5. Schlüssel und Werte der Frage im Hauptarray überprüfen.
        6. Statische Texte mit <?php echo ... ; ?> Tags ersetzen.
        7. Erstelle eine Kopie der Entwurfsversion des Templates.
        8. Im der Kopie: Forme den PHP-Code zur Vorbereitung der 
           Fragedaten in eine Funktion nextQuestionData() um.
           Füge die Laufnummer der Frage zu den Fragedaten hinzu.
    */
?>
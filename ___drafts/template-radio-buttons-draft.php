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

<h7>Frage <?php echo $data["questionIndex"] + 1; ?></h7>
<h3><?php echo $data["question-text"]; ?></h3>

<form action="question.php" method="post" onsubmit="return validateRadios('single-choice');">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
        <label class="form-check-label" for="single-choice-0">
            <?php echo $data["values"][0]; ?>
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
        <label class="form-check-label" for="single-choice-1">
            <?php echo $data["values"][1]; ?>
        </label>
    </div>

    <input type="hidden" name="questionIndex" value="1">
    <p id="validation-warning" class="warning"></p>
    <button type="submit" class="btn btn-primary">Next</button>
    <p class="spacer"></p>
</form>
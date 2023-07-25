<?php
    // Die Daten der Frage werden im Include question-on-type.php,
    // in $data bereitgestellt.
?>

<h7>Frage <?php echo $data["questionIndex"] + 1; ?></h7>
<h3><?php echo $data["question-text"]; ?></h3>

<form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateRadios('single-choice');">
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

    <input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
    <p id="validation-warning" class="warning">&nbsp;</p>
    <button type="submit" class="btn btn-primary">Next</button>
    <p class="spacer"></p>
</form>
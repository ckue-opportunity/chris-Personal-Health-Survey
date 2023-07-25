<?php
    // Die Daten der Frage werden im Include question-on-type.php,
    // in $data bereitgestellt.
?>

<h7>Frage <?php echo $data["questionIndex"] + 1; ?></h7>
<h3><?php echo $data["question-text"]; ?></h3>

<form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateNumber('times-per-day');">
  <label for="times-per-day" class="form-label"><?php echo $data["label"]; ?></label>
  <input type="number" name="times-per-day" id="times-per-day" class="form-control" style="max-width: 80px;" 
         min="<?php echo $data["min"]; ?>" max="<?php echo $data["max"]; ?>">

  <input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
  <p id="validation-warning" class="warning">&nbsp;</p>
  <button type="submit" class="btn btn-primary">Next</button>
  <p class="spacer"></p>
</form>

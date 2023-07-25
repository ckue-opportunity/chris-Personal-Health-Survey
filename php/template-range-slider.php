<?php
    // Die Daten der Frage werden im Include question-on-type.php,
    // in $data bereitgestellt.
?>

<h7>Frage <?php echo $data["questionIndex"] + 1; ?></h7>
<h3><?php echo $data["question-text"]; ?></h3>

<form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateRange('range-slider');">
    <p class="instruction"><?php 
        if (isset($data["instruction"])) echo $data["instruction"]; 
        else echo "&nbsp;";
    ?></p>

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
    <input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
    <p id="validation-warning" class="warning">&nbsp;</p>
    <button type="submit" class="btn btn-primary">Next</button>
    <p class="spacer"></p>
</form>
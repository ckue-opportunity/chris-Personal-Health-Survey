<?php include 'php/header.php'; ?>
<?php include 'php/data-collector.php'; ?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h7>Frage 2</h7>
      <h3>Nimmst du Nahrungsergänzungsmittel?</h3>

      <form action="question-3.php" method="post" onsubmit="return validateRadios('single-choice');">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0">
                Nein
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1">
                Ja
            </label>
        </div>

        <input type="hidden" name="lastPageID" value="question-2">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

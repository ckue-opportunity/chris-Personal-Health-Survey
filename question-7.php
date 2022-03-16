<?php include 'php/header.php'; ?>
<?php include 'php/data-collector.php'; ?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h7>Frage 7</h7>
      <h3>Nimmst du Nahrungsergänzungsmittel?</h3>

      <form action="question-8.php" method="post" onsubmit="return validateQuestion('number-text');">
        <label for="inputPassword5" class="form-label">Anzahl Mahlzeiten pro Tag</label>
        <input type="number" name="number-text" id="number-text" class="form-control" style="max-width: 80px;">

        <input type="hidden" name="lastPageID" value="question-7">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

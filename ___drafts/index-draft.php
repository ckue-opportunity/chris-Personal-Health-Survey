<?php 
/*  Initialisiere die Session. Auf der Index-Seite, welche
    die erste Frage und damit den Beginn der Umfrage anzeigt, 
    sollen jeweils alle vorherigen Daten gelöscht werden.
*/
session_start();
session_destroy();

include 'php/header.php';
?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h3>Erfahre jetzt, wie gesund du bist!</h3>
      <p>Antworte auf 10 einfache Fragen und wir geben dir Feedback darauf.</p>
      
      <h7>Frage 1</h7>
      <h3>Wie gesund bist du körperlich?</h3>

      <form action="question-2.php" method="post" onsubmit="return validateRange('range-slider');">
        <p class="instruction">Schätze deine Gesundheit mit dem Slider ein.</p>

        <div class="row flex-nowrap" style="padding-left:16%">
            <div class="col">
              <p>Ungesund</p>
            </div>
            <div class="col" style="text-align: center;">
              <p>soso lala</p>
            </div>
            <div class="col" style="text-align: right;">
              <p>Sehr gesund</p>
            </div>
        </div>

        <input type="range" name="range-slider" id="range-slider" class="form-range" 
               min="-1" max="5" step="1" value="0">
        <input type="hidden" name="questionIndex" value="-1">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>

        <p class="spacer"></p>
      </form>

      <!--button onclick="validateRange('bli-bli')">Test</button-->

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

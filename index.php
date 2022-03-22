<?php 
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

        <div class="row flex-nowrap">
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

        <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
        <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

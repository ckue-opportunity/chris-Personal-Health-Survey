<?php include 'php/header.php'; ?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <p><strong>Welche Farben hat die französische Flagge?</p>

      <form action="quiz-report.php" method="post" onsubmit="return evaluateCheckboxes();">
            <input type="checkbox" id="answer-1" name="cbox-1" value="0">
            <label for="q41">orange</label><br>

            <input type="checkbox" id="answer-2" name="cbox-2" value="1">
            <label for="q42">rot</label><br>

            <input type="checkbox" id="answer-3" name="cbox-3" value="0">
            <label for="q43">grün</label><br>

            <input type="checkbox" id="answer-4" name="cbox-4" value="0">
            <label for="q44">lila</label><br>

            <input type="checkbox" id="answer-5" name="cbox-5" value="1">
            <label for="q45">weiss</label><br>

            <input type="checkbox" id="answer-6" name="cbox-6" value="1">
            <label for="q46">blau</label><br>

            <input type="hidden" name="lastPageID" value="question-multiple-choice">
            <input type="hidden" id="achievedPoints" name="achievedPoints">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">NEXT</button>
        </form>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

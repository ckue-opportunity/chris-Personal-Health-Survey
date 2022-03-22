<?php include 'php/header.php'; ?>
<?php include 'php/data-collector.php'; ?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h7>Frage 4</h7>
      <h3> ... ?</h3>

      <form action="question-6.php" method="post" onsubmit="return validateCheckboxes();">

            <?php include 'survey-title.php' ?>
            <br>
            <p>Question 4:</p>
            <p><strong>What additional physical activity
                    do you operate the most?</p></label><br><br>

            <input type="checkbox" id="q41" name="q41" value="q41">
            <label for="q41"> No add. physical activity </label><br>

            <input type="checkbox" id="q42" name="q42" value="q42">
            <label for="q42"> Lifting weights</label><br>

            <input type="checkbox" id="q43" name="vehicle3" value="Boat">
            <label for="q43"> Walking</label><br>

            <input type="checkbox" id="q44" name="q44" value="q44">
            <label for="q44"> Jogging </label><br>

            <input type="checkbox" id="q45" name="q45" value="q45">
            <label for="q45"> Running </label><br>

            <input type="checkbox" id="q46" name="q46" value="q46">
            <label for="q46"> Swimming </label><br>

            <input type="checkbox" id="q47" name="q47" value="q47">
            <label for="q47"> Dancing </label><br>

            <input type="checkbox" id="q48" name="q48" value="q48">
            <label for="q48"> Aerobics </label><br>

            <input type="checkbox" id="q49" name="q49" value="q49">
            <label for="q49"> Pilates </label><br>

            <input type="checkbox" id="q50" name="q50" value="q50">
            <label for="q50"> Team Sports </label><br>

            <input type="checkbox" id="q51" name="q51" value="q51">
            <label for="q51"> Other </label><br><br>


            <input type="hidden" name="lastPageID" value="question-3">
            <input type="hidden" id="checkboxValues" name="checkboxValues">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">NEXT</button>
            <a href="page3.php" class="next">PREVIOUS</a><br><br>
        </form>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

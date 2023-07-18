<?php 
  include "php/data-collector.php";
  include "php/evaluate-user-data.php";
  include 'php/header.php';
?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h7>Feedback</h7>
      <h3>Danke für's Mitmachen!</h3>

      <?php
        echo "<p class='final-feedback'>" . "You are of excellent health!" . "</p>";
      ?>

      <button type="button" class="btn btn-primary"
              onclick="document.location='/index.php'">Repeat</button>

      <p class="spacer"></p>
      <?php prettyPrint($_SESSION); ?>
      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

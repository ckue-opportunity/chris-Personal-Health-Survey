<?php 
  include "php/data-collector.php";
  include "php/evaluate-user-input.php";
  include 'php/header.php';
?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h7>Feedback</h7>
      <h3>Danke für's Mitmachen!</h3>

      <?php
        echo "<p></p>";
        echo "<p class='final-feedback'>" . "Du hast $totalPoints von 33 Punkten erreicht." . "</p>";

        if ($totalPoints < 12) {
          echo "<p class='final-feedback'>" . "Bitte kümmere dich mehr um deine Gesundheit!" . "</p>";
        }
        elseif ($totalPoints < 24) {
          echo "<p class='final-feedback'>" . "Du scheinst ok zu sein, könntest aber noch mehr für deine Gesundheit tun." . "</p>";
        }
        else {
          echo "<p class='final-feedback'>" . "Gratuliere, du bist sehr fit!" . "</p>";
        }

        echo "<p></p>";
      ?>

      <button type="button" class="btn btn-primary"
              onclick="document.location='/index.php'">Repeat</button>

      <p class="spacer"></p>
      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

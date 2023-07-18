<?php 
  include "php/data-collector.php";
  include 'php/header.php';
?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h3>Erfahre jetzt, wie gesund du bist!</h3>
      <p>Antworte auf 10 einfache Fragen und wir geben dir Feedback darauf.</p>
      
      <?php include "php/question-template-switch.php"; ?>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'php/footer.php'; ?>

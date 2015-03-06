<?php
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/series.inc.php';
$pagetitle = "Sermons";
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/head.inc.php';
?>

    <section id="main">
      <div class="row">
        <div class="small-12 columns">
          <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5">
            <?php foreach ($series as $key => $value) {
              $title = $value['title'];
              $image = $value['image'];
              echo "<li>";
              echo "  <p class='text-center'><a href='/series/?playlist=$key'><img class='th' src='$image' /></a></p>";
              echo "  <p class='text-center'>$title</p>";
              echo "</li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </section>

<?php
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/foot.inc.php';
?>
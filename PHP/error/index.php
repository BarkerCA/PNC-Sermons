<?php
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/series.inc.php';
$pagetitle = "Error";
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/head.inc.php';
?>
  
    <section id="main">
      <div class="row">
        <div class="small-12 columns">
          <?php if($_GET['error'] == 'no_playlist'){ ?>
            <p class="alert-box alert">Playlist Error: The playlist that was selected does not exist, please try a different playlist.</p>
          <?php } ?>
        </div>
      </div>
    </section>
  
<?php
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/foot.inc.php';
?>
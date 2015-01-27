<?php
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/series.inc.php';
if(!$series[$_GET['playlist']]){
  header('Location: http://sermons.pointenorth.org/error/?error=no_playlist');
  exit;
}

$pagetitle = $series[$_GET['playlist']]['title'];
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/head.inc.php';
?>

    <section id="main">
      <div class="row">
        <div class="small-12 columns">
          <h1><?php echo $series[$_GET['playlist']]['title']; ?></h1>
          <hr />
          <div class="row collapse">
            <div id="start_date" class="small-12 large-6 columns">
              Series Beginning: <span><?php echo $series[$_GET['playlist']]['sdate']; ?></span>
            </div>
            <div id="end_date" class="small-12 large-6 columns">
              Series End: <span><?php echo $series[$_GET['playlist']]['edate']; ?></span>
            </div>
          </div>
          <iframe width="100%" height="<?php echo $series[$_GET['playlist']]['pheight']; ?>" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $series[$_GET['playlist']]['url']; ?>&color=77b800&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false"></iframe>
        </div>
      </div>
    </section>
  
<?php
include $_SERVER["DOCUMENT_ROOT"] . '/assets/includes/foot.inc.php';
?>
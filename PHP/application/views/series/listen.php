<div class="row">
  <div class="small-12 columns">
    <h1><?php echo $series['title']; ?></h1>
    <hr />
    <div class="row collapse">
      <div id="start_date" class="small-12 large-6 columns">
        Series Beginning: <span><?php echo $series['start_date']; ?></span>
      </div>
      <div id="end_date" class="small-12 large-6 columns">
        Series End: <span><?php echo $series['end_date']; ?></span>
      </div>
    </div>
    <iframe width="100%" height="<?php echo soundcloud_player_height($series['tracks']); ?>" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $series['url']; ?>&color=77b800&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false"></iframe>
  </div>
</div>
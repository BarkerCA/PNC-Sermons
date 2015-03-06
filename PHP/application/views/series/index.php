<div class="row">
  <div class="small-12 columns">
    <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5">
      <?php foreach ($series as $series_item) { ?>
        <li>
          <p class='text-center'><a href='listen/<?php echo $series_item['slug']; ?>'><img class='th' src='<?php echo sermon_image_path($series_item['image']); ?>' /></a></p>
          <p class='text-center'><?php echo $series_item['title']; ?></p>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>
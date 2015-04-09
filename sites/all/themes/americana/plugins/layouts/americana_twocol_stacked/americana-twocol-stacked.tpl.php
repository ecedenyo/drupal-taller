<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row">
    <?php print $content['top']; ?>
  </div>
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <?php print $content['left']; ?>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <?php print $content['bottom']; ?>
  </div>
</div>

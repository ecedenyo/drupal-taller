<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
    <div class="row">
      <?php print $content['top']; ?>
    </div>
  <?php endif ?>

  <?php if ($content['left'] || $content['middle'] || $content['right']): ?>
    <div class="row"> <!-- @TODO: Add extra classes -->
      <?php if ($content['left']) : ?>
<div class ="col-md-4"><div class="row">
      <?php print $content['left']; ?>
</div></div>
<?php endif ?>
      <?php if ($content['middle']) : ?>
<div class="col-md-4"><div class="row">
      <?php print $content['middle']; ?>
</div></div>
<?php endif ?>
      <?php if ($content['right']) : ?>
<div class="col-md-4"><div class="row">
      <?php print $content['right']; ?>
</div></div>
<?php endif ?>
    </div>
  <?php endif ?>

  <?php if ($content['bottom']): ?>
    <div class="row">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif ?>
</div>

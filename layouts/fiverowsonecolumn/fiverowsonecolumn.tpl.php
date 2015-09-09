<?php
/**
 * @file
 * Template for a 5 rows 1 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-display panel-5rows1col clearfix"<?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-5rows1col-row clearfix"><?php print $content['header']; ?></div>
  <div class="panel-5rows1col-row clearfix"><?php print $content['main_top']; ?></div>
  <div class="panel-5rows1col-row clearfix"><?php print $content['main']; ?></div>
  <div class="panel-5rows1col-row clearfix"><?php print $content['main_bottom']; ?></div>
  <div class="panel-5rows1col-row clearfix"><?php print $content['footer']; ?></div>
</div>

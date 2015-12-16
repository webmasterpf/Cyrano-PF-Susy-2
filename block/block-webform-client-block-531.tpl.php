<?php // Template de bloc pour un ID specifique - https://www.drupal.org/node/104319 ?>
<aside id="block-<?php print $block->module .'-'. $block->delta ?>" 
     class="block block-<?php print $block->module .' '. $block_zebra .' '. $block->region ?> clearfix <?php print $block_classes; ?>">
  <div class="block-inner">

    <?php if (!empty($block->subject)): ?>
      <h2 class="title block-title"><?php print $block->subject; ?></h2>
    <?php endif; ?>

    <div class="content">
      <?php print $block->content; ?>
    </div>

    <?php print $edit_links; ?>

  </div> <!-- /block-inner -->
</aside> <!-- /block -->
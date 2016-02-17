<?php /*
 * Template de node pour utiliser un layout Flexbox via Susy 2 - Le layout se règle avec 
 * les CSS de la feuille _layout-nodes-flexbox.scss
 *   */
?>
<!-- ______________________ NODE-PAGE_POLE.TPL _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    
       <?php if ($title): ?>
<div class="titre-flex"><h1 class="title-page"><?php print $title; ?></h1></div>
              <?php endif; ?>
    
  <div class="node-inner conteneur-flex">
 
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
<!-- ______________________ PARTIE CUSTOMISEE _______________________ -->
               
<!-- ______________________ BLOC 1 _______________________ -->
<div id="bloc1-flex" class="layoutflex_3col_all4 page_TYPE">
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
              </div>
<!-- ______________________ BLOC 2 _______________________ -->
              <div id="bloc2-flex" class="layoutflex_3col_all4 page_TYPE">
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>
              </div>
<!-- ______________________ BLOC 3 _______________________ -->
              <div id="bloc3-flex" class="layoutflex_3col_all4last page_TYPE">
                  <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>
              </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
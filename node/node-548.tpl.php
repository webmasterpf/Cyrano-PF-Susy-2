<?php /*
 * Template de node pour utiliser un layout Flexbox via Susy 2 - Le layout se règle avec 
 * les CSS de la feuille _layout-nodes-flexbox.scss
 * 
 * Page Espace Partenaires avec 5 régions (flexbox optionnel)
 * Nid PROD : 54xx / DEV : 549
 */
?>
<!-- ______________________ NODE-PAGE_ESPACE.TPL _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    
       <?php if ($title): ?>
    <!--<div class="titre-flex"><h1 class="title-page-bloc"><?php //print $title; ?></h1></div>-->
              <?php endif; ?>
    
  <div class="node-inner">
 
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
<!-- ______________________ PARTIE CUSTOMISEE _______________________ -->


<!-- ______________________ BLOC 1 _______________________ -->
<div id="bloc-1" class="col1_layout_max espace-partenaire">
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
              </div>


<!-- ______________________ BLOC 2 _______________________ -->
              <div id="bloc-2"  class="col1_layout_max espace-partenaire">
                  <a name="institutionnels"></a>
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>
              </div>
<!-- ______________________ BLOC 3 _______________________ -->
              <div id="bloc-3"  class="col1_layout_max espace-partenaire">
                  <a name="associatifs"></a>
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>
              </div>
<!-- ______________________ BLOC 4 _______________________ -->
              <div id="bloc-4"  class="col1_layout_max espace-partenaire">
                  <a name="branches"></a>
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_4.php');
              ?>
              </div>

<!-- ______________________ BLOC 5 _______________________ -->
<div id="bloc-5" class="col1_layout_max espace-partenaire">
    <a name="particuliers"></a>
    <div class="content">
              <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
  <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>  
</div>
  </div>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
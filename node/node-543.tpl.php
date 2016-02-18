<?php /*
 * Template de node pour utiliser un layout Flexbox via Susy 2 - Le layout se règle avec 
 * les CSS de la feuille _layout-nodes-flexbox.scss
 * 
 * Page Espace Entreprise avec 5 régions avec flexbox 
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
<div id="bloc1-flex " class="col1_layout_max espace-entreprise">
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
              </div>

<?php /* Il faut séparer le contenu géré par flexbox et le mettre dans une boite avec display:flex*/?>
<div class="//conteneur-flexchild">
<!-- ______________________ BLOC 2 _______________________ -->
              <div id="bloc2-flex"  class="layout_4col_all3 espace-entreprise">
                  <a name="devenir-partenaire"></a>
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>
              </div>
<!-- ______________________ BLOC 3 _______________________ -->
              <div id="bloc3-flex"  class="layout_4col_all3 espace-entreprise">
                  <a name="accueillir"></a>
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>
              </div>
<!-- ______________________ BLOC 4 _______________________ -->
              <div id="bloc4-flex"  class="layout_4col_all3 espace-entreprise">
                  <a name="taxe"></a>
                   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_4.php');
              ?>
              </div>
<!-- ______________________ BLOC 5 _______________________ -->
              <div id="bloc5-flex"  class="layout_4col_all3 espace-entreprise">
                  <a name="vie-lycees"></a>
                  <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_5.php');
              ?>
              </div>
</div><!-- /conteneur-flexchild --> <?php //fin de la partie flexbox uniquement pour les colonnes ?>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
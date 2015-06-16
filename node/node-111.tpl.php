<!-- ******* TEMPLATE DE NODE111 POUR PAGE BTS ET ENTREPRISE *********************** -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

      <!--_______________________ COLONNE 1 __________________ -->
      <div id="colonne-1" class="col1_layout_7_5 page-bts">
    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php  print $node->content['body']['#value']; ?>

         
            <?php
       if (!empty($node->field_docs_bts_alternance[0]['view']
        OR $node->field_docs_bts_alternance[1]['view']
        OR $node->field_docs_bts_alternance[2]['view']
        OR $node->field_docs_bts_alternance[3]['view']
        )): ?>
        <ul id="docs-alternance-bts">
         <?php
               foreach ($node->field_docs_bts_alternance as $key => $TYPE_CONTENU) {
                   print $node->field_docs_bts_alternance[$key]['view'];
               }
               ?>            
           </ul>
            <?php endif;?>
      
    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
  <?php
 $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano');
 include ($theme_path.'/includes/inc_region_col_1.php');
 ?>
     </div>  
</div><!--Fin colonne 1-->

<!--_______________________ COLONNE 2 __________________ -->
      <div id="colonne-2" class="col2_layout_7_5 page-bts">
         
<?php
 $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano');
 include ($theme_path.'/includes/inc_objectif_bts.php');
 ?>

          

  <?php
 $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano');
 include ($theme_path.'/includes/inc_region_col_2.php');
 ?>


      </div>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
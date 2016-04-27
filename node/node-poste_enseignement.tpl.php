<!--_________ NODE TEMPLATE POUR ANNONCE BTS -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
 

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
        <!-- ______________________ COLONNE GAUCHE _______________________ -->
		
			
         <div id="colonne-1" class="col1_layout_2_6_4 detail-offre">
              <?php if ($title): ?>
                <h1 class="titre-offre-ctpro"><?php print $title; ?></h1>
              <?php endif; ?>
            <?php print $left; ?>
          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->
      
   
      <div id="colonne-2" class="col2_layout_2_6_4 detail-offre">
  <!--Partie centrale -->

       <table class="table-poste-bts offre-poste-enseignement">
           <tr class="line1">
               <td>  <?php  print $node->content['field_reference_pbts']['field']['#title']  ?></td>
               <td>  <?php  print $node->field_reference_pbts[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_lieux']['field']['#title'] ?></td>
               <td><?php 
              // our massive array with set values and empty values
$tab_lieux = $node->field_lieux;

        
               foreach ($tab_lieux as $key => $lycee) {
                   // get the empty array keys using array_keys
$lycee_clean = array_keys($lycee,"");

// foreach empty key, we unset that entry
foreach ($lycee_clean as $k){unset($lycee[$k]);}
//                   $liste_lycees = array_filter($lycee, 'strlen');//supprime les éléments vides
                   print $lycee_clean['view'].'</br>';
                   if($lycee['view'] !== null OR !empty($lycee['view'])){
                       print $liste_lycees['view'].'</br>';
                   }
                               
               
//           drupal_set_message(print_r($liste_lycees, TRUE));   
//Récupération du tid dans une variable, suppression des doublon                               
                               foreach ($lycee as $clef => $valeur) {
//                     $term_tid[] .= $lycee['value'];       
        $term_tid = $clef;
        $term_tid = array_filter($term_tid, 'strlen'); //supprime éléments vides
        //$term_tid = array_unique($term_tid);//supprime doublons
//                                   $liste_lieux .= $lycee_unique['value'].',';
        $liste_lieux .= $term_tid . ',';

        if (!in_array($lycee,$liste_lieux))
   {
                                       $tab_liste_lieux[] .= $lycee['value'];
                                                
   }                                    
     
                               }
                  
               }
//                drupal_set_message(t("Clé tableau lycée : $key; Valeur tableau lycee: $lycee<br />\n")); 
//                drupal_set_message(t("Valeur var liste_lieux: $liste_lieux<br />\n")); 
//                drupal_set_message(t("Valeur tab liste_lieux: $tab_liste_lieux<br />\n")); 
//                drupal_set_message(print_r($tab_liste_lieux, TRUE)); 
           ?></td>

           </tr>
              <tr class="line1">
               <td>  <?php  print $node->content['field_discipline']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_discipline[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_vol_heures']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_vol_heures[0]['view'] ?>H</td>

           </tr>
             <tr class="line1">
               <td>  <?php  print $node->content['field_etat_poste']['field']['#title'] ?></td>
               <td class="etat">  <?php  print $node->field_etat_poste[0]['view'] ?></td>

           </tr>
            <tr class="line2">
               <td> Postuler à l'offre</td>
               <td> <?php 
          
               print '<a href=/node/573?destinataire='.$liste_lieux.'&ref_offre='.$node->field_reference_pbts[0]['value'].'&disc_offre=tid_'
                       .$node->field_discipline[0]['value'].'>ICI</a>';?></td>

           </tr>
          
       </table>

    <div class="content">
    
      
      <?php 
      //print $content;
      print $node->content['body']['#value']
              ?>

    
      <?php if ($centralBloc): ?>
                <div id="middleGalerie"><?php print $centralBloc; ?></div>
              <?php endif; ?>
                   
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
    <?php //print Cyrano_PF_taxonomy_specifique($node,7); ?>

      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      </div><!-- /fin colonne 2 centrale-->
      <!-- ______________________ COLONNE DROITE _______________________ -->
                   
          
           <div id="colonne-3" class="col3_layout_2_6_4 detail-offre-ctpro">
                                   <?php 
  
  global $theme_path;
include($theme_path .'/includes/inc_region_col_3.php');
//include($theme_path .'/includes/drupal_debug/inc_drupal_debug.php');
?>
            </div>
        

  </div> <!-- /node-inner -->
</div> <!-- /node-->
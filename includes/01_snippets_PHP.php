<html>
    <h2> SNIPPETS PHP POUR DIVERS USAGES DANS TPL OU INCLUDES </h2>
</html>

    <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if (!empty($node->field_NAME[0]['view'])): ?>
                <div class="CLASS_NAME">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_NAME as $key => $lien) {
                    print '<li>'.$node->field_NAME[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>

<?php //mise en forme tableau (à finaliser)
if (!empty($node->field_NAME[0]['view'])): ?>
<table  class="CLASS_NAME">
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th class="table-head-<?php print $fields[$field]; ?>">
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr <?php print implode(' ', $row_classes[$count]); ?>">
        <?php foreach ($row as $field => $content): ?>
          <td class="champs-<?php print $fields[$field]; ?>">
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif;?>

 <?php //utiliser nom d'un champ comme classe dynamique
       if (!empty($node->field_image_deco_lycee[0])):
           print "<span class=".$node->content['field_image_deco_lycee']['field']['#field_name']."/>".$node->field_image_deco_lycee[0]['view'].'</span>'; /* Image deco page lycee */
       endif;
       ?>

<?php
// INLCUSION D'UNE VUE AVEC ARGUMENTS (Filtre dynamique)
                $viewname = 'liste_autres_vdl';
                $view = views_get_view ($viewname);
                $viewdisplay = $view->set_display('block_1');

//vid = 4 , type d'evenement pour site en prod
                $lesVid=array('4');

// on recupere le vid (taxonomie) et l'on verifie si c'est celui voulu
                if ( !empty($node->taxonomy)  ) {
// Récupération du 1er element du tableau
                    $term = array_shift($node->taxonomy);
                    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
                    if ( in_array($term->vid,$lesVid) ) {
                        $args = $term->tid;
                        $view->set_arguments($args);
                        //debugage
                        drupal_set_message('VID vocabulaire: '.$term->vid.' et le terme id : '.$term->tid,'status');
                        drupal_set_message('Vue utilisé: '.$viewname,'status');
                        $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' .$view->preview($viewdisplay, $args).'</div>';
                        drupal_set_message('Argument pour la vue : tid '.$args.'/ nid '.$node->nid,'status');
                        drupal_set_message('Vue sortie des valeurs avant affichage : '.$output,'status');
                        if (!empty($view->result)) {
                            print $output;
                            drupal_set_message('Vue sortie des valeurs: '.$output,'status');
                        }
                    }
                }
                
                ?>
<!--Code à finaliser pour theming de views field-->
<ul class="bxslider">
               <?php
               foreach ($fields['field_galerie_image_vdl_fid']->content as $key => $lien) {
                    print '<li>'.$fields['field_galerie_image_vdl_fid']->content.'</li>';
               }
               ?>  
                  </ul>

Tableau Multidimensionnel !!!!
<?php 
               foreach ($node->field_lieux as $key => $lycee) {
                   //tableau multidimensionnel
               //    drupal_set_message(print_r($tab_lieux, TRUE));
                         

//Récupération du tid dans une variable, suppression des doublon,issu du tableau multidimensionnel                               
                               foreach ($lycee as $key2 => $term_tid) {
                                                
        $lycee = array_filter($lycee); //supprime les éléments vides
       // $lycee_unique = array_unique($lycee); //supprime doublons
        $liste_lieux .= $lycee['value']. ','; //stocké pour le $GET
        print $liste_lieux_node .= $lycee_unique['view'] . '</br>';
//         drupal_set_message(print_r($lycee, TRUE));
//         drupal_set_message(print_r($lycee_unique, TRUE));         
                               }
                  
               }
//                drupal_set_message(t("Clé tableau lycée : $key; Valeur tableau lycee: $lycee<br />\n")); 
                drupal_set_message(t("Valeur var liste_lieux: $liste_lieux<br />\n")); 
//                drupal_set_message(t("Valeur tab liste_lieux: $tab_liste_lieux<br />\n")); 
//                drupal_set_message(print_r($tab_liste_lieux, TRUE)); 
           ?>

Visibilité d'un block selon termes de taxonomie https://www.drupal.org/node/134428#comment-3430976
<?php
$match = FALSE;
$types = array('contenu_entreprise' => 1);
if (arg(0) == 'node' && is_numeric(arg(1))) {
  $nid = arg(1);
  $node = node_load(array('nid' => $nid));
  $type = $node->type;
  if (isset($types[$type])) {
    $match = TRUE;
  }
  if (arg(1) == '111') {
    $match = FALSE;
  }
//liste les tids qui n'afficheront pas le block
 $desired_terms = array(113, 115, 116);
    $found = 0;
    if ( arg(0) == 'node' && is_numeric(arg(1)) && arg(2) == FALSE ) {//inutile si dans un autre if qui teste les parametres du node
      // Yes, we're viewing a node in view mode.
      $node = node_load(arg(1)); // cached
      // If the term does not exist we're done
      if (is_array($node->taxonomy)) {
        foreach ($node->taxonomy as $term) {
          if ( in_array($term->tid, $desired_terms) ) {
            $match = FALSE;
          } //if
        } //foreach term
      } //if
    } //if node
     $match = TRUE;//à retirer
}
return $match;


?>
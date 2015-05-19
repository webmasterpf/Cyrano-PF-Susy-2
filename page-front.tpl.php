<?php $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano'); include ($theme_path.'/includes/inc_header.php'); ?>  

<!--     ______________________ LAYOUT HOMEPAGE VERTICAL D_______________________ -->


<!--  ______________________ CONTENU _______________________ -->

          <?php if ($content_top): ?>
            <div class="content-top">
              <?php print $content_top; ?>
            </div>   <!--  /content-top -->
          <?php endif; ?>

 

     <!--        ______________________ PARTIE GAUCHE _______________________ -->

	  <?php if ($annonceImg): ?>
                 <div id="annonceImg"><?php print $annonceImg; ?></div>
              <?php endif; ?>
                 <?php if ($blocLycee): ?>
                 <div id="blocLycee"><?php print $blocLycee; ?></div>
              <?php endif; ?>

    <!--______________________ ZONE DIAPO DROITE_______________________ -->

                 
                  <div id="contentAnim"> 		
        <?php if ($Anim): ?>
            <div id="textAnim"><?php print $Anim; ?></div><!-- /#textAnim -->
        <?php endif; ?>
		
      </div><!-- /#contentAnim -->
	
<!--    ______________________ FIN LAYOUT PAGE _______________________ -->


	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div class="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php //print $feed_icons; ?>
         </div><!-- /#content-bottom -->
         <?php endif; ?>


   
        <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>
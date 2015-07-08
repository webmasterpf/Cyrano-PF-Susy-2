<?php $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano'); include ($theme_path.'/includes/inc_header.php'); ?>  

<!--     ______________________ LAYOUT HOMEPAGE PF _______________________ -->


<!--  ______________________ CONTENU _______________________ -->

          <?php if ($content_top): ?>
            <div class="content-top">
              <?php print $content_top; ?>
            </div>   <!--  /content-top -->
          <?php endif; ?>

 

     <!--        ______________________ PARTIE GAUCHE _______________________ -->
     <div class="HPGauche">
         <?php if ($annonceImg): ?>
             <div class="annonceImg"><?php print $annonceImg; ?></div>
         <?php endif; ?>
         <?php if ($blocLycee): ?>
             <div class="blocLycee"><?php print $blocLycee; ?></div>
         <?php endif; ?>
     </div>

    <!--______________________ PARTIE DROITE_______________________ -->

     <div class="HPDroite">            
                  <div class="contentAnim"> 		
        <?php if ($Anim): ?>
            <div class="textAnim"><?php print $Anim; ?></div><!-- /#textAnim -->
        <?php endif; ?>
		
      </div><!-- /#contentAnim -->
	</div>
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
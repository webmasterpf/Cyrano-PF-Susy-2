<?php $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano'); include ($theme_path.'/includes/inc_header.php'); ?>
 <!-- ______________________ LAYOUT PAGE FORMATION _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPage">
      
          <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div class="content-top">
	<span class="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
      <!-- <pre> <?php print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->   
       <?php //print_r(arg(0)); ?>
            </div> <!-- /#content-top -->
            <?php endif; ?>
	  
      
     <!-- ______________________ CONTENT INNER _______________________ -->
        
        <div class="content-inner">
		 <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>             
	
                
               
		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content">
          <?php print $content; ?>
           <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->

        

         
          
      </div> <!-- /content-inner /content -->

            
       <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>
    

       
		  <!-- ______________________ COLONNE DROITE _______________________ -->
       
         <!--d�but du contenu droit -->
	<div id="right-content-pageFormation">
            
            
		

               
          
	 </div>
          
    	   
           <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

	 </div> <!-- /contentPage -->
	  
	  <?php $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano'); include ($theme_path.'/includes/inc_footer.php'); ?>
     
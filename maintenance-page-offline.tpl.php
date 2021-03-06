<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
  $head_title = 'Lyc&eacute;e Provence Formation :: Site-offline';
  $logo = '/sites/all/themes/susy2_pf_cyrano/images/logo-Pf-sites-lycees.jpg';

  // If your theme is set to display the site name, uncomment this line and replace the value:
   $site_name = 'Le site de l\' Association Provence Formation';

  // If your theme is set to *not* display the site name, uncomment this line:
  unset($site_name);

  // If your theme is set to display the site slogan, uncomment this line and replace the value:
  $site_slogan = 'Association Provence Formation - Lyc&eacute;es Priv&eacute;s Technologiques et Professionnels';

  // If your theme is set to *not* display the site slogan, uncomment this line:
  // unset($site_slogan);

  // Main message. Note HTML markup.
  $content = "<p>Le site rencontre actuellement des probl&egrave;mes techniques, veuillez nous en excuser.</p><hr /><p>Si vous en &ecirc;tes l'administrateur, veuillez v&eacute;rifier les acc&egrave;s &agrave; votre base de donn&eacute;es </p>";

  //Texte pour le footer
  $footer ='<p>Association Provence Formation - Tél: 04.91.53.36.30 </br>
      Lyc&eacute;es Priv&eacute;s Technologiques et Professionnels - 
 Tous droits réservés Reproduction interdite sans autorisation</p>';
  ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
    <body class="<?php print $body_classes; ?>">

    <!-- TEMPLATE PAGE MAINTENANCE DE BASE  -->
 <section class="conteneur">
    <header id="header">
      <div id="logo-title">

        <?php if (!empty($logo)): ?>
          <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <div id="name-and-slogan-offline">
          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan-offline"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->
      </div> <!-- /logo-title -->

      <?php if (!empty($header)): ?>
        <div id="header-region">
          <?php print $header; ?>
        </div>
      <?php endif; ?>

    </header> <!-- /header -->
 <!-- ______________________ LAYOUT PAGE OFFLINE _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->

      <div id="content-global-offline">


		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-maintenance">
             <?php
// Main message.  Note HTML markup.
print $content;
    ?>
              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->





      </div> <!-- /content-inner /content -->





    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
         <footer id="footer-offline">

<?php print $footer; ?>
         
         </footer> <!-- /footer-wrapper -->

  </section> <!-- /conteneur -->
    </body>
</html>

         
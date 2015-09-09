<?php

/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[mailkey].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $subject: The message subject.
 * - $body: The message body in HTML format.
 * - $mailkey: The message identifier.
 * - $recipient: An email address or user object who is receiving the message.
 * - $css: Internal style sheets.
 *
 * @see template_preprocess_mimemail_message()
 */
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php if ($css): ?>
    <style type="text/css">
      <!--
      <?php print $css ?>
      -->
    </style>
    <?php endif; ?>
  </head>
  <body id="mimemail-body" <?php if ($mailkey): print 'class="'. $mailkey .'"'; endif; ?>>
<!--      TEMPLATE MIMEMAIL BASIC-->
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" id="table-nl">
   <thead>
   <tr border="0" style="text-align:center">
<td colspan="3"  style="color: #911381"> 
  <p>
  <?php if ($format == 'html'): ?><a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a>
  <?php else: ?>-- <a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a><?php endif ?> 
</p></td></tr>
   <tr><td colspan="3" height="150">
     <div align="center"><a href="http://www.provence-formation.fr/"><img src="http://www.provence-formation.fr/sites/all/themes/Cyrano_PF/images/newsletter/header-newsletter-2012.jpg" alt="El&egrave;ves devant le Lyc&eacute;e" width="695" height="145"/></a> </div></td>
   </tr></thead>   
</table>
    <div id="center">
      <div id="main">
        <?php print $body ?>
      </div>
    </div>
<!-- TEMPLATE CUSTOM NEWSLETTER FOOTER -->
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" id="table-nl-footer"><tbody>
<tr border="0"style="text-align:center">
<td colspan="3"><a href="https://twitter.com/assopf13" target="_blank">Twitter Officiel</a> - <a href="http://www.facebook.com/ProvenceFormation" target="_blank">Page Facebook</a>
- <a href="https://www.linkedin.com/company/provence-formation" target="_blank">Page LinkedIn</a></td>
</tr>
<tr border="0"style="text-align:center">
<td colspan="3"><div id="txt-footer" style="color: #E25132;">
    <p>Association Provence Formation - 13008 MARSEILLE</p>
</div></td></tr>
<tr border="0"><td colspan="3"  style="color: #E25132;height:55px;">
<div align="right"><img src="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/bg_footer.jpg"/></div>
</td></tr>
<tr><td colspan="3" style="text-align:center"><?php if ($key == 'test'): ?>- <?php print $test_message ?>  -<?php endif ?></td></tr><!-- /table Footer NL-->
</tbody></table>
  </body>
</html>

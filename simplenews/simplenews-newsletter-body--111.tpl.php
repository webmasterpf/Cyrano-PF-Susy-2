<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to simplenews-newsletter-body--<tid>.tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - $node: Newsletter node object
 * - $body: Newsletter body (formatted as plain text or HTML)
 * - $title: Node title
 * - $language: Language object
 *
 * @see template_preprocess_simplenews_newsletter_body()
 * 
 * Pour Tpl selon le Tid de la Taxonomie Newsletter
 * 
 * !!!!!!!!!!!!! LARGEUR 700 PX !!!!!!!!!
 */
?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!--general stylesheet-->
<style type="text/css">
#table-nl-bordure{border:#FF6600 0px solid;width:703px;background:none;margin:0 auto;}
#table-nl-bordure{border: 0 solid #FF6600;padding: 5px;}
#table-nl table{ border-collapse: collapse;border-spacing: 0;}
#table-nl h2{text-align: center;color: #E25132; margin: 0.8em;}
#table-nl tbody{display: block; width: auto;}
#table-nl tr{}
#table-nl td{font-family: Trebuchet MS,sans-serif;}
td.colonne-1-nl{vertical-align:top}
td.colonne-2-nl{}
td.colonne-3-nl{vertical-align:top;vspace:2px;hspace:2px;display:block;}
td#col-3 span{}
span#illustration-nl{display:block;padding:2px;margin:2px;border:1px solid #F29400;background:#FFCC66;}
span#custom-list-01{border:#6633CC 1px solid;margin:2px;display:block;padding:2px;background:#DDBBFF;}
#table-nl a{color: #911381;}
#table-nl a:hover{text-decoration: none;}
#table-nl strong{color: #E7512F;}
tr.table-tr-content{border-bottom-color: #d6d6d6; border-bottom-width: 1px; border-bottom-style: solid;}
.liste-views{display:block;}
.liste-views a{color:#333333;}
.liste-views h3{color:#E94F2B;font-size:14px;text-align: center;}

#txt-footer{color: #911381;font-family: Trebuchet MS,sans-serif;}
#txt-footer a{color: #E7512F;}
#txt-footer a:hover{}
td.colonne-2-nl ul li {list-style: none inside;border-bottom: 0.1em #00b5e5 dotted;padding: 0 0 1.3em 0;clear:both;}
td.colonne-2-nl  .view-Liste-contenu-newsletter img,td.colonne-2-nl  img{border: 1px solid #E25132 ;padding: 0.2em;margin-right: 0.3em; float: left;}
 #table-nl .colonne-2-nl table{border: 0;background: none;}
 #table-nl .colonne-2-nl tbody {border: 0;background: none;}
 #table-nl .colonne-2-nl thead {border: 0;background: none;}
 #table-nl .colonne-2-nl th{border: 0;background: none;}
 td.colonne-2-nl  tr{background: none;border-bottom: 1px #00b5e5 dotted;padding: 0.3em 0;  display: block;}
 td.colonne-2-nl td a{margin: 0 0 0 1em;font-family: Trebuchet MS,sans-serif;}  
 td.colonne-2-nl td p{margin: 0 0 0 1em;font-family: Trebuchet MS,sans-serif;}  
 td.colonne-2-nl td h3{margin: 0 0 0 1em;font-family: Trebuchet MS,sans-serif;}  
</style>
 
 <!--[if gte mso 9]>
 <style>
 /*OUTLOOK STYLE*/
 h2,h2 a,h2 a:visited,h3,h3 a,h3 a:visited,h4,h5,h6,.t_cht {color:#000 !important}
 .ExternalClass * {line-height: 100%} 
 </style>
 <![endif]-->
</head>
<!-- TEMPLATE CUSTOM NEWSLETTER BODY TID 111 PROD -->
<table align="center" id="table-nl-bordure" style="border:0;margin:0 auto;width:703px;" >
  <tbody>
  <tr><td>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" id="table-nl">
   <thead>
 
   <tr><td colspan="3" height="150">
           <div align="center">

        <a href="http://www.provence-formation.fr"  target="_blank" ><img src="http://www.provence-formation.fr/sites/all/themes/Cyrano_PF/images/newsletter/header-newsletter-2012.jpg" alt="Aller sur le site" width="695" height="145"/>
         </a>  
           </div></td>
         
   </tr></thead>   
<tbody>
<tr><td colspan="3" style="text-align:center"> <a href="<?php print $base_url.'/node/'.$node->nid.'?utm_source=newsletter-'.$node->nid.'&utm_medium=email&utm_campaign='.$node->title.'&utmac=UA-10621674-1' ?>" target="_blank" style="color: #E7512F;">Voir la newsletter sur le site</a></td></tr>
    <tr border="0">
     

    <td  class="colonne-2-nl" style=""><!-- Corps -->
            <?php echo $body;/*contenu du node newsletter*/ ?> </td>
     </tr>
<!-- TEMPLATE CUSTOM NEWSLETTER FOOTER -->

<tr border="0">
<td style="width:100%;text-align:center;"><a href="https://twitter.com/assopf13" target="_blank"> <img src=http://www.provence-formation.fr/sites/all/themes/Cyrano-PF-Susy-2/images/newsletter/twitter.gif alt="logo twitter" />Twitter Officiel</a> - <a href="http://www.facebook.com/ProvenceFormation" target="_blank"> <img src=http://www.provence-formation.fr/sites/all/themes/Cyrano-PF-Susy-2/images/newsletter/facebook.gif alt="logo facebook" />Page Facebook</a>
- <a href="https://www.linkedin.com/company/provence-formation" target="_blank"><img src=http://www.provence-formation.fr/sites/all/themes/Cyrano-PF-Susy-2/images/newsletter/linkedin.gif alt="logo linkedin" />Page LinkedIn</a></td>
</tr>
<tr border="0"style="text-align:center">
<td colspan="3"><div id="txt-footer" style="color: #E25132;">
    <p>Association Provence Formation - 13008 MARSEILLE</p>
</div></td></tr>
<tr border="0"><td colspan="3"  style="color: #E25132;height:55px;">

</td></tr>
<tr><td colspan="3" style="text-align:center"><?php if ($key == 'test'): ?>- <?php print $test_message ?>  -<?php endif ?></td></tr><!-- /table Footer NL-->
</tbody></table>
<!-- /table NL -->
</td></tr></tbody></table><!-- /table bordure -->

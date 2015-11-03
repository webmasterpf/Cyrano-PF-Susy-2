/*
 * Plugin Jquery qui utilisent la version de base fournie par Drupal
 * jquery update 1.3.2
 */
(function ($) {
//<!--Pour utiliser selectnav en RWD-->
    jQuery(document).ready(function () {
//        console.log('Dans la boucle Defaut :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
//            ' -- Version de Jquery pour var $ :' + $.fn.jquery +
//            ' -- Version de Jquery pour var jQuery :' + jQuery().jquery+
//            ' -- Version de Jquery pour var jQuery111 :' + jQuery111().jquery
//            );

        selectnav('subnav', {label: '- Accès rapide -'});

        //Header collant haut de page
$("#header").sticky({topSpacing: 10});





    });




    //Pour enlever la taille des images sur les Gallery Formatter
    jQuery(document).ready(function () {

        jQuery('#bloc-galerie-vdl .gallery-slides').each(function () {
            //jQuery(this).removeAttr('width')
            //jQuery(this).removeAttr('height');
            jQuery(this).attr("style", "width:25em;height:22em;");
        });

    });
})(jQuery);
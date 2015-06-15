<script>
/*
 * Plugin Jquery qui utilisent la version de base fournie par Drupal
 * jquery update 1.3.2
 */
//<!--Pour utiliser slectnav en RWD-->
    $(document).ready(function(){
        console.log('Dans la boucle Defaut :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
            ' -- Version de Jquery pour $ :' + $.fn.jquery +
            ' -- Version de Jquery pour jQuery :' + jQuery().jquery
            );
    
    selectnav('subnav',{label: '- Accès rapide -'});
    
    $("#header").sticky({topSpacing:10});
    
    
    
    $(".bandeau-pagetop").sidebar({side: "top"});
    $(".bandeau-pagetop").trigger("sidebar:toggle");
    });      
</script> 
<script>
/*
 * Pour pouvoir utiliser plusieurs versions de Jquery : https://www.drupal.org/node/1058168
 * Utiliser jQuery111  pour les plugins qui n'utilisent pas 1.3.2 fournit par Jquery Update
 * Trés bonne explication sur action du noConflict() : 
 * http://sundropsoftware.com/how-to-use-jquery-noconflict-the-right-way/
 */
var jQuery111 = jQuery;
jQuery.noConflict();

//console.log('Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
//            ' -- Version de Jquery pour $ :' + $.fn.jquery +
//            ' -- Version de Jquery pour jQuery :' + jQuery().jquery
//            ), 

/* Effets Jquery avec version différente de jQ */
  jQuery111(document).ready(function(){
    console.log(
'Dans la boucle Plugins :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
' -- Version de Jquery pour $ :' + $.fn.jquery +
' -- Version de Jquery pour jQuery :' + jQuery().jquery
     );  
    
        //header colle au top
    //jQuery("#header").sticky({topSpacing:10});

    
    // volet coulissant v1
    //jQuery111(".bandeau-pagetop").sidebar({position:"top",open:"click"});

    // Sidebar on top side avec jQuery Sidebar    
    jQuery111(".bandeau-pagetop").sidebar({side: "top"});
    jQuery111(".bandeau-pagetop").trigger("sidebar:toggle");
   });
 
 
</script>
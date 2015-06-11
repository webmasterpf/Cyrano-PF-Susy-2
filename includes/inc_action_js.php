 <script>
  $jq(document).ready(function(){
    $jq("#header").sticky({topSpacing:10});//header colle au top
   });
 </script> 
 
 <script>// volet coulissant
   //  $jq("#volet").sidebar({position:"top",open:"click"});</script>
 
<script>// Sidebar on top side avec jQuery Sidebar
    $jq(document).ready(function(){
    $jq(".bandeau-pagetop").sidebar({side: "top"});
    $jq(".bandeau-pagetop").trigger("sidebar:toggle");
    });
</script>

<!--Pour utiliser slectnav en RWD-->
<script>selectnav('subnav',{label: '- Accès rapide -',}); </script>
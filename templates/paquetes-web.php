<?php 
/* Template Name: Paquetes Web */ 
get_header('esbrillante');
?>

<?php 

include "tabla-paquetes-web.php";

?>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1452603591624233"
  theme_color="#ffc300"
  logged_in_greeting="Hola ¿En qué te puedo ayudar?"
  logged_out_greeting="Hola ¿En qué te puedo ayudar?">
</div>

<?php get_footer(); ?>


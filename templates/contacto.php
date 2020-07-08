<?php 
/* Template Name: Contacto */ 

get_header('esbrillante');

?>

<section id="contacto" class="template-section padding-50 animacion">
    <div class="contenedor">
        <div class="flex">
            <div class="bloque">
                <h2 class="contacto">
                    <span class="hablanos">Háblanos sobre tu</span>
                    <span class="negocio">NEGOCIO</span>
                    <span class="planificacion">para comenzar con</span>
                    <span class="exitosa">el desarrollo de tu proyecto</span>
                </h2>
                <p class="texto">Cuéntanos que es lo que necesitas para que se ponga en contacto un especialista.</p>

                <?php
                            echo do_shortcode('[caldera_form id="CF5abd857d4c16b"]');
                          ?>
            </div>
            <div class="bloque">
                 <?php include "info-contacto.php"; ?>
            </div>
        </div>
    </div>
</section>


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

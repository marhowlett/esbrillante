<?php 
/* Template Name: Empleo */ 
get_header();
?>

<section id="contacto" class="template-section padding-50 animacion">
    <div class="contenedor">
        <div class="flex">
            <div class="bloque">
                <h2 class="contacto">
                    <span class="hablanos">Únete al</span>
                    <span class="negocio">EQUIPO</span>                    
                    <span class="exitosa">de EsBrillante</span>
                </h2>
                <p class="texto"><strong>Hola,</strong></p>
                <p>Estamos buscando a un especialista freelance para el manejo de campañas en Facebook Ads y Google Adwords.</p>
                <p>
                  Se requiere que cumplas con las siguientes competencias:  
                </p>
                
                <ul class="list">
                    <li>Segmentación de anuncios.</li>
                    <li>Desarrollo de Estrategias en plataformas digitales.</li>
                    <li>Cumplimiento de objetivos mensuales de campañas.</li>
                    <li>Medición, análisis, elaboración de reportes.</li>
                    <li>Excelente redacción.</li>
                    <li>Vínculo entre clientes y agencia.</li>
                    <li>Seguimiento de entregables.</li>
                    <li>Empático, buen comunicador y capacidad para toma de decisiones.</li>
                    <li>Capacidad analítica.</li>
                    <li>Conocimiento de Pixel de Facebook</li>
                    <li>Manejo de Google Analytics</li>
                </ul>
                
                <h3>Qué esperamos de ti</h3>
                
                
                <p>Disponibilidad de horario, pasión y compromiso para emprender proyectos que requieren de energía y enfoque. </p>
                <p>Valor agregado. Buscamos un profesional que tenga el gusto de compartir sus ideas y visiones en los proyectos que realizamos, todas las ideas son bienvenidas y la iniciativa es fundamental.</p>
                <p>Análisis enfoque analítico capaz de planear, organizar, dirigir y controlar estrategias, un amante de los reportes y números.</p>
                <p>Envíanos tu CV. Si tienes un portafolio de trabajo también será de gran utilidad.
En caso de calificar, espera nuestra llamada para tener una entrevista y conocernos.</p>
                
            </div>
            <div class="bloque">
                 <?php
                            echo do_shortcode('[caldera_form id="CF5b36c33fd4382"]');
                          ?>
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

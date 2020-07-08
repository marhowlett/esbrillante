<?php 
/* Template Name: Principal */ 
get_header('esbrillante');
?>

<section id="intro" class="home">
    <div class="contenedor">
        <h1>Diseñamos tu <b>imagen corporativa y página web</b> enfocándonos en <br> <u>aumentar tus ventas</u></h1>

        <p>
            Creamos desde tu logotipo, hasta tu estrategia de marketing digital completa para que atraigas a los usuarios de Internet y se conviertan en tus clientes.
        </p>

        <h2>¿Qué necesitas?</h2>
        <div class="flex nowrap">
            <a href="/diseno-imagen-corporativa/" class="boton negro" title="Ir a diseño de imagen corporativa"><span>Imagen Corporativa</span></a>
            <a href="/diseno-de-paginas-web-profesionales-empresas/" class="boton amarillo" title="Ir a diseño de Soluciones Web"><span>Página Web</span></a>
        </div>

        <div id="aplicaciones" class="aplicaciones">
            <img class="web" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/web-min.png" alt="Diseño de páginas Web en Cuernavaca y CDMX">
            <img class="hoja" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/hoja-membretada-min.png" alt="Diseño gráfico profesional">
            <img class="triptico" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/volante-min.png" alt="Diseño de tripticos">
            <img class="taza" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/taza-min.png" alt="Diseño de imagen corporativa">
            <img class="responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/responsive-min.png" alt="Diseño Web responsivo y campañas en Facebook Ads y Google Adwords">
        </div>

    </div>
</section>

<section id="imagen-corporativa" class="template-section">
    <div class="contenedor">
        <h2>La imagen corporativa comunica tu <b>esencia y el profesionalismo </b> que te caracterizan</h2>
        <img class="tarjetas" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/tarjetas-min.png" alt="Diseño de imagen corporativa">
        <div class="flex">
            <div class="flecha">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/flecha-min.png" alt="Morelos">
            </div>
            <p>
                Hay muchas marcas que tienen productos maravillosos pero que cuentan con una página Web o con una imagen empresarial que <b>no refleja el verdadero potencial que venden</b> y que hacen sentir a sus posibles clientes que su producto no puede ser tan bueno como ellos dicen.
            </p>
        </div>

    </div>
</section>

<section id="vender" class="template-section">
    <div class="contenedor">
        <div class="flex">
            <div class="bloque">
                <h2>
                    Si quieres <span class="resaltado">vender en Internet</span> hay algo que es imprescindible que <strong>comuniques:</strong> El <span class="resaltado">valor real</span> de los productos o servicios que vendes.
                </h2>
            </div>
            <div class="bloque">
                <div class="texto">
                    <p>
                        Para tener resultados es necesario que haya una <b>investigación</b> de lo que está haciendo tu competencia y que comuniques todas las ventajas que tú tienes. <b>Nosotros te llevaremos de la mano para que eso suceda.  </b>
                    </p>
                    <p>
                        Somos una agencia de marketing digital y diseño para empresarios dispuestos a <b>trabajar e invertir para que su negocio crezca.</b>
                    </p>
                    <p>
                        Nuestros servicios de imagen y marketing digital ayudan a transmitir el <b>mensaje correcto</b> y a hacer que todos vean por qué tu servicio es tan especial y <b>por qué deberian comprarte.</b>
                    </p>

                    <div class="flex">
                        <a href="/diseno-imagen-corporativa/" class="boton negro"><span>Imagen Corporativa</span></a>
                        <a href="/diseno-de-paginas-web-profesionales-empresas/" class="boton amarillo"><span>Página Web</span></a>
                    </div>
                </div>


            </div>
        </div>



    </div>
</section>

<!--   <section id="suscribete">
            <div class="contenedor">
                <div class="flex">
                    <div class="bloque">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/suscribete-min.png" alt="suscribe a esbrillante">
                    </div>
                    <div class="bloque">
                        <h4>
                            Suscríbete para recibir los <b>6 consejos que 
                            debes seguir</b> antes de comprar un Sitio Web.
                        </h4>
                        Code newsletter
                    </div>
                </div>
            </div>
        </section>-->

<section id="clientes" class="template-section">
    <div class="contenedor">
        <h3>
            Únete a los más de <b>150 empresarios</b> <br> que han <b>trabajado con nosotros.</b>
        </h3>
        <div class="flex nowrap">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/roys-min.jpg" alt="Restaurante Roys Cuernavaca"></a>
            <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/elemental-min.jpg" alt="Elemental Botica"></a>
            <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/skydive-min.jpg" alt="Skydive México"></a>
        </div>

        <div class="flex nowrap">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/cafealondra-min.jpg" alt="Café Alondra"></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/donpollo-min.jpg" alt="Don Pollo"></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/nutricion-min.jpg" alt="Nutrición por tu Salud"></a>
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

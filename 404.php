<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<div class="site-content col-md-12" role="main">


	<div class="page-wrapper">
		<div class="page-content animacion">
			<h1>
			    <small>Error</small>
			    404
			</h1>
			
			<p>Ups, no tenemos la página que estás buscando.
Regresa a la página principal, para encontrar lo que necesitas o contáctanos.</p>
    
            <div class="flex">
               <div class="bloque"><a href="/" class="boton negro text-amarillo subrayado-amarillo">Ir a la página de inicio</a></div>
                <div class="bloque"><a class="boton amarillo" href="/contacto">Contactar</a></div>                
            </div>
		</div><!-- .page-content -->
	</div><!-- .page-wrapper -->

</div><!-- .site-content -->

<?php get_footer(); ?>
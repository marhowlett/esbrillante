<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$product_images_attr = $product_image_summary_class = '';

$product_images_class  	= woodmart_product_images_class();
$product_summary_class 	= woodmart_product_summary_class();
$single_product_class  	= woodmart_single_product_class();
$content_class 			= woodmart_get_content_class();
$product_design 		= woodmart_product_design();
$breadcrumbs_position 	= woodmart_get_opt( 'single_breadcrumbs_position' );
$image_width 			= woodmart_get_opt( 'single_product_style' );
$full_height_sidebar    = woodmart_get_opt( 'full_height_sidebar' );
$page_layout            = woodmart_get_opt( 'single_product_layout' );
$tabs_location 			= woodmart_get_opt( 'product_tabs_location' );
$reviews_location 		= woodmart_get_opt( 'reviews_location' );

//Full width image layout
if ( $image_width == 5 ) {
	$product_images_class .= ' vc_row vc_row-fluid vc_row-no-padding';
	$product_images_attr = 'data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"';
}

$container_summary = $container_class = $full_height_sidebar_container = 'container';

if ( $full_height_sidebar && $page_layout != 'full-width' ) {
	$single_product_class[] = $content_class;
	$container_summary = 'container-none';
	$container_class = 'container-none';
	$product_image_summary_class = 'col-lg-12 col-md-12 col-12';
} else {
	$product_image_summary_class = $content_class;
}

if ( woodmart_get_opt( 'single_full_width' ) ) {
	$container_summary = 'container-fluid';
	$full_height_sidebar_container = 'container-fluid';
}

?>

<?php if ( ( ( $product_design == 'alt' && ( $breadcrumbs_position == 'default' || empty( $breadcrumbs_position ) ) ) || $breadcrumbs_position == 'below_header' ) && ( woodmart_get_opt( 'product_page_breadcrumbs', '1' ) || woodmart_get_opt( 'products_nav' ) ) ): ?>
	<div class="single-breadcrumbs-wrapper">
		<div class="container">
			<?php if ( woodmart_get_opt( 'product_page_breadcrumbs', '1' ) ) : ?>
				<?php woodmart_current_breadcrumbs( 'shop' ); ?>
			<?php endif; ?>

			<?php if ( woodmart_get_opt( 'products_nav' ) ): ?>
				<?php woodmart_products_nav(); ?>
			<?php endif ?>
		</div>
	</div>
<?php endif ?>

<div id="generar-cotizacion">
		<div class="container">
				<a href="#" id="cerrar"></a>
				<div id="info-cotizacion"></div>

		</div>
</div>

<div class="container page-producto">
	<?php
		/**
		 * Hook: woocommerce_before_single_product.
		 */
		 do_action( 'woocommerce_before_single_product' );

		 if ( post_password_required() ) {
		 	echo get_the_password_form();
		 	return;
		 }

	?>


<script>
jQuery(function ($) {
	/* Puedes usar $ con seguridad para hacer referencia a jQuery */

	$("#wwob_sticky .sidebar__inner").append( "<button id='cotizar'>Generar Cotización</button>" );
	$("#cerrar").click(function(e) {
		e.preventDefault();
		$("#generar-cotizacion").hide('fast');
		$("#info-cotizacion").html("");
		$("#info-cotizacion").removeClass('active');
	});

	$( "#cotizar" ).click(function(e) {
		e.preventDefault();
  		var items = $( ".wwobchoices" ).contents().find( ".side-menu-items p" );
		
		var i = 0;
		var arrayItem = new Array();
		var idItem = [];
		var itemsArray = [];
		arrayItem[0] = "esencial";
		while (i < items.length) {
			arrayItem[i+1] = $(items[i]).text().trim();
			
			i++;
    	}

		
			

		var myJsonString = JSON.stringify(arrayItem);
		
		//console.log(arrayItem);

		$("#generar-cotizacion").show('fast');
		$("#info-cotizacion").html("<h2>Generando cotización...</h2>");
		$.ajax({
			data: myJsonString,
			type: "POST",
			dataType: "json",
			url: "https://esbrillante.mx/generar-cotizacion/",
		})
		.done(function( data, textStatus, jqXHR ) {
			if ( console && console.log ) {

				//Mostrar Pantalla Emergente
				console.log( data["message"] );

				$("#info-cotizacion").html(data['message']);
				$("#info-cotizacion").addClass('active');

			}
		})
		.fail(function( jqXHR, textStatus, errorThrown ) {
			if ( console && console.log ) {
				console.log( "La solicitud a fallado: " +  textStatus);
			}
		});

	});
});
</script>
</div>

<?php if ( $full_height_sidebar && $page_layout != 'full-width' ) echo '<div class="' . $full_height_sidebar_container . '"><div class="row full-height-sidebar-wrap">'; ?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( $single_product_class, $product ); ?>>

	<div class="<?php echo esc_attr( $container_summary ); ?>">

		<?php
			/**
			 * Hook: woodmart_before_single_product_summary_wrap.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 */
			do_action( 'woodmart_before_single_product_summary_wrap' );
		?>

		<div class="row product-image-summary-wrap">
			<div class="product-image-summary <?php echo esc_attr( $product_image_summary_class ); ?>">
				<div class="row product-image-summary-inner">
					<?php if ( $image_width == 5 ): ?>
						<div class="vc_row-full-width"></div>
					<?php endif ?>
					<div class="summary entry-summary">
						<div class="summary-inner">
							<?php if ( ( ( $product_design == 'default' && ( $breadcrumbs_position == 'default' || empty( $breadcrumbs_position ) ) ) || $breadcrumbs_position == 'summary' ) && ( woodmart_get_opt( 'product_page_breadcrumbs', '1' ) || woodmart_get_opt( 'products_nav' ) ) ): ?>
								<div class="single-breadcrumbs-wrapper">
									<div class="single-breadcrumbs">
										<?php if ( woodmart_get_opt( 'product_page_breadcrumbs', '1' ) ) : ?>
											<?php woodmart_current_breadcrumbs( 'shop' ); ?>
										<?php endif; ?>

										<?php if ( woodmart_get_opt( 'products_nav' ) ): ?>
											<?php woodmart_products_nav(); ?>
										<?php endif ?>
									</div>
								</div>
							<?php endif ?>

							<?php
								/**
								 * woocommerce_single_product_summary hook
								 *
								 * @hooked woocommerce_template_single_title - 5
								 * @hooked woocommerce_template_single_rating - 10
								 * @hooked woocommerce_template_single_price - 10
								 * @hooked woocommerce_template_single_excerpt - 20
								 * @hooked woocommerce_template_single_add_to_cart - 30
								 * @hooked woocommerce_template_single_meta - 40
								 * @hooked woocommerce_template_single_sharing - 50
								 */
								do_action( 'woocommerce_single_product_summary' );
							?>
						</div>
					</div>
				</div><!-- .summary -->
			</div>

			<?php 
				if ( ! $full_height_sidebar ) {
					/**
					 * woocommerce_sidebar hook
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
				}
			?>

		</div>
		
		<?php
			/**
			 * woodmart_after_product_content hook
			 *
			 * @hooked woodmart_product_extra_content - 20
			 */
			do_action( 'woodmart_after_product_content' );
		?>

	</div>

	<?php if ( $tabs_location != 'summary' || $reviews_location == 'separate' ) : ?>
		<div class="product-tabs-wrapper">
			<div class="<?php echo esc_attr( $container_class ); ?>">
				<div class="row">
					<div class="col-12 poduct-tabs-inner">
						<?php
							/**
							 * woocommerce_after_single_product_summary hook
							 *
							 * @hooked woocommerce_output_product_data_tabs - 10
							 * @hooked woocommerce_upsell_display - 15
							 * @hooked woocommerce_output_related_products - 20
							 */
							do_action( 'woocommerce_after_single_product_summary' );
						?>
					</div>
				</div>	
			</div>
		</div>
	<?php endif; ?>

	<?php do_action( 'woodmart_after_product_tabs' ); ?>

	<div class="<?php echo esc_attr( $container_class ); ?> related-and-upsells"><?php 
		/**
		 * woodmart_woocommerce_after_sidebar hook
		 *
		 * @hooked woocommerce_upsell_display - 10
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woodmart_woocommerce_after_sidebar' );
	?></div>

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php 
	if ( $full_height_sidebar && $page_layout != 'full-width' ) {
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	}
?>

<?php if ( $full_height_sidebar && $page_layout != 'full-width' ) echo '</div></div>'; ?>


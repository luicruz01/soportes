<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?>
<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/normalize.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/select2.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site a-center">
    <?php
	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="login-var c-m-100 a-center">
		    <div class="l-v-inner col c-m-16 clearfix">
		        <a href="#" class="c-m-3 facturacion c-s-50">Facturacion</a> 
		        <div class="login-signup col c-m-4 c-s-50">
				<?php 
					if (is_user_logged_in()):
					echo ('<a href="https://www.soportesstar.com/wordpressnewsite/mi-cuenta/" class="login">Mi cuenta</a>');
					else : 
						echo ('<a href="https://www.soportesstar.com/wordpressnewsite/mi-cuenta/" class="login">Login | </a><a href="https://www.soportesstar.com/wordpressnewsite/registrate/" class="login">Regístrate</a> ');

					endif;
				 ?>
		        	<!-- <a href="http://www.soportesstar.com/wordpressnewsite/mi-cuenta/" class="login">Login | </a><a href="http://www.soportesstar.com/wordpressnewsite/registrate/" class="login">Regístrate</a>  -->
		        </div>
		    </div> 
		</div>
		<div class="main-nav-wrapper a-center">
            <div class="main-nav col c-m-16 a-justify">
                <a href="https://www.soportesstar.com/" class="logo col c-m-3 c-s-50">
                    Soportes Star
                </a> 
                <nav class="site-navigation col c-m-9 c-s-1">
                <a href="#" class="responsive-trigger col">Menú</a>
                    <?php
						wp_nav_menu(
							array(
								'theme_location'	=> 'primary',
								'container_class'	=> 'primary-navigation',
								)
						);
					?>
                </nav>
                <a href="" class="col c-m-3 cart-component-wrapper c-s-1">
	                <div class="cart-component">
	                	<span class="cart-badge col hidden">
	                		<?php global $woocommerce; ?>
	                		<?php $my_cart_count = $woocommerce->cart->cart_contents_count; ?>
	                		<?php echo $my_cart_count; ?>
	                	</span>

	                	<div class="cart-info">
	                		<?php  /* Display number of items in cart and total */  global $woocommerce;  echo "".sprintf(_n('%d Producto', '%d Productos', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); echo "   ".$woocommerce->cart->get_cart_total();
	                	?>
	                	</div>
	                	<div class="">
	                		<?php get_sidebar(); ?>
	                	</div>
	                </div>
                </a>
                <div class="s-filters col c-m-16">
                    <?php do_action( 'storefront_header' ); ?>
                </div>

            </div>
        </div>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<div class="s-s-breadcrumbs col c-m-16">
			<?php
			/**
			 * Functions hooked in to storefront_content_top
			 *
			 * @hooked woocommerce_breadcrumb - 10
			 */
			do_action( 'storefront_content_top' );
			?>
		</div>
<?php
/**
 * storefront child theme functions.php file.
 * @package storefront-child
 */

//Storefront adds it's own stylesheet for child themes


add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );

/**
 * woo_custom_product_searchform
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/

/**
 * @snippet       Hide Price & Add to Cart for Logged Out Users
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=299
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 2.5.5.
 */


add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
        global $wp_query;
        $cat = $wp_query->get_queried_object();
        $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        if ( $image ) {
            echo '<img src="' . $image . '" alt="" />';
        }
    }
}



 
add_action('init', 'bbloomer_hide_price_add_cart_not_logged_in');
 
function bbloomer_hide_price_add_cart_not_logged_in() { 
	if ( !is_user_logged_in() ) {       
	 remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	 remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );  
	 add_action( 'woocommerce_single_product_summary', 'bbloomer_print_login_to_see', 31 );
	 add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_print_login_to_see', 11 );
	}
}

function SearchFilter($query) {

    if ($query->is_search) {
    $query->set('post_type', 'product');

}
    return $query;  
}

add_filter('pre_get_posts','SearchFilter');


add_filter( 'post_class', 'prefix_post_class', 21 );
function prefix_post_class( $classes ) {
    if ( 'product' == get_post_type() ) {
        $classes = array_diff( $classes, array( 'first', 'last' ) );
    }
    return $classes;
}



add_image_size( 'blog_thumbnail', 310, 170);



 
function bbloomer_print_login_to_see() {
//echo '<a href="http://www.soportesstar.com/wordpressnewsite/registrate/" class="not-links">' . __('Login or register to see prices', 'theme_name') . '</a>';
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
    'name' => 'cart widget',
    'id' => 'cart_widget-sidebar',
    'description' => 'Cart',
    'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
    ));
}



add_action('add_to_cart_redirect', 'resolve_dupes_add_to_cart_redirect');
 
function resolve_dupes_add_to_cart_redirect($url = false) {
 
     // If another plugin beats us to the punch, let them have their way with the URL
     if(!empty($url)) { return $url; }
 
     // Redirect back to the original page, without the 'add-to-cart' parameter.
     // We add the `get_bloginfo` part so it saves a redirect on https:// sites.
     return get_bloginfo('wpurl').add_query_arg(array(), remove_query_arg('add-to-cart'));
 
}


/**
 * Change the add to cart text on single product pages
 */
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );

function woo_custom_cart_button_text() {

    global $woocommerce;
    
    foreach($woocommerce->cart->get_cart() as $cart_item_key => $values ) {
        $_product = $values['data'];
    
        if( get_the_ID() == $_product->id ) {
            return __('Ya en carrito, agregar otro?', 'woocommerce');
        }
    }
    
    return __('Add to cart', 'woocommerce');
}

/**
 * Change the add to cart text on product archives
 */
add_filter( 'add_to_cart_text', 'woo_archive_custom_cart_button_text' );

function woo_archive_custom_cart_button_text() {

    global $woocommerce;
    
    foreach($woocommerce->cart->get_cart() as $cart_item_key => $values ) {
        $_product = $values['data'];
    
        if( get_the_ID() == $_product->id ) {
            return __('Already in cart', 'woocommerce');
        }
    }
    
    return __('Add to cart', 'woocommerce');
}




/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
  global $product;
    
    $args['posts_per_page'] = 6;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 2; // arranged in 2 columns
    return $args;
}




function woo_custom_product_searchform( $form ) {
	
	$form = '';
	return $form;
	
}
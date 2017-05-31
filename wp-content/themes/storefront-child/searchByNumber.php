<?php 		

// Our include
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');


// Our variablesl
$catName = (isset($_GET['productCatTerm'])) ? $_GET['productCatTerm'] : 1000;
echo $catNlame;

	$args = array(
	    'post_type' => 'product',
	    'posts_per_page' => 100,
	    'product_cat' => $catName
	    );
	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) {
	    while ( $loop->have_posts() ) : $loop->the_post();
	        woocommerce_get_template_part( 'content', 'product' );
	    endwhile;
	} else {
	    echo __( 'No products found' );
	}
	wp_reset_postdata();

?>

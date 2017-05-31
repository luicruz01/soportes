<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

?>

<div id="sidebar">
	<?php
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('cart_widget-sidebar') ) :
	endif; ?>
</div>

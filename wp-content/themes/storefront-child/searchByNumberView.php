<?php 

/**
* The template for displaying the homepage.
*
* This page template will display any functions hooked into the `homepage` action.
* By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
* use the Homepage Control plugin.
* https://wordpress.org/plugins/homepage-control/
*
* Template name: Busqueda por numero
*
* @package storefront
*/
	get_header();
 ?>

<div class="content">
	<h1>Busca por número STAR </h1>
	<form action="#" class="s-b-n-form">
		
		<label for="product-number">
		<input type="text" class="search-by-number-value" name="product-number" placeholder="Número STAR"> 
		</label>
		<a href="#" class="search-by-number" >Buscar</a>
	</form>


	<div class="results">
		<ul class="products products-number-archive">
			
		</ul>
	</div>

</div>

<?php get_footer(); ?>
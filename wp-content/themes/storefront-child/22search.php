<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>

	<section id="primary" class="content-area search-results">
	

	<main id="main" class="site-main" role="main">
		
		<?php
		global $product; 
		$terms = get_the_terms( $post->ID, 'product_cat' );
		$s=get_search_query();

		$args = array( 's' =>$s); 

		$wc_query = new WP_Query($args);
		?>
		<ul>
		     <?php if ($wc_query->have_posts()) : ?>
		     <?php while ($wc_query->have_posts()) :
		                $wc_query->the_post(); ?>

		          <h3 class="">
		               <a href="<?php the_permalink(); ?>">
		               <?php the_title(); ?>
		               </a>
		          </h3>
		          <?php the_post_thumbnail(); ?>
		          <?php the_excerpt(); ?>

		    </li>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
		    <?php else:  ?>
		    <li>
		          <?php _e( 'No Products' ); ?>
		     </li>
		     <?php endif; ?>
		</ul>


		</main><!-- #main -->



	</section><!-- #primary -->
<?php
get_footer();

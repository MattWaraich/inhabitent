<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


	<section>
		<h2>Shop Stuff</h2>
		<div class="shop-terms">
			<?php
			$args = [
				'taxonomy' => 'product-type',
				'hide_empty' => false,
			];
		
				
			$terms = get_terms( $args );
			
			foreach ( $terms as $term ) {

				$icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
				
				echo '<img src="' . $icon . '" />';
				echo $term->name;
				echo $term->description;
				// echo get_term_link($term)
			}; 
		
	
			?>
		 </div>
	</section>


<?php 
$args = array(
    'post_type'         => 'post',
    'order'             => 'ASC',
	'posts_per_page'    => '4'
);
 $query = new WP_Query($args);

 if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
   <h1><?php the_title(); ?></h1>
   <?php the_content(); ?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
   <h2>Nothing found!</h2>
<?php endif; ?>
			
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
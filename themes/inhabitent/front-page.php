<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
		<!-- home hero banner -->
		<section class="home-hero">
			<img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
		</section>
         <!-- PRODUCTS -->
	<section class="product-info-container">
		<h2>Shop Stuff</h2>

		<?php 
$args = array(
    'post_type'         => 'post',
    'order'             => 'ASC',
	'posts_per_page'    => '4'
);
 $query = new WP_Query($args);
?>

			<div class="product-type-blocks">

				<?php
					$args = [
					'taxonomy' => 'product-type',
					'hide_empty' => true,
					];
					$terms = get_terms( $args );
			
						foreach ( $terms as $term ) :
			?>

			<div class="product-each">
				<?php
					$icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
					$name = $term->name;
					$description = $term->description;
				?>					
				<img class="icon-image" src="<?php echo $icon?>" />
				
				<p><?php echo $term->description;?></p>

				<a href="<?php echo get_term_link($term)?>"> <?php echo $name ?>  Stuff</a>

					<!-- echo get_term_link($term) -->
			</div>
				<?php endforeach;?>
			
			</div>
	</section>

<!-- JOURNAL ENTRIES -->
<section>

<h2>Inhabitent Journal</h2>

<?php 
$args = array(
    'post_type'         => 'post',
	'order'             => 'DESC',
	'order'				=> 'date',
	'posts_per_page'    => '3'
);
 $journals = get_posts($args);
?>

<div class="journal-entries">

	<?php foreach ($journals as $post) : ?>
                       <?php setup_postdata($post); ?>

                       <div class='front-page-post-container'>
                           <div class='front-page-post-thumbnail'>
                               <?php the_post_thumbnail('array(100)'); ?>
                           </div>


                           <div class='front-page-post-wrapper'>
                               <div class='front-page-post-date'>
                                   <?php the_date(); ?>
                               </div>
                               <div class='front-page-post-comment'>

                                 <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                               </div>
                           </div>

                           <div class='front-page-post-title'>
                               <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

                           </div>
                           <div class='front-page-post-permalink'>
                               <a href="<?php the_permalink() ?>" rel="bookmark">Read Entry</a>
                           </div>
                       </div>
				<?php endforeach; ?>
</div>
</section>
				   
			
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
 
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1> <?php single_term_title() ?> </h1>
				<!-- Products -->
				<div class="product-list">
                <ul class="product-taxonomies">
						<?php
							$taxonomy_list = array(
								'taxonomy' => 'product-type',
								'hide_empty' => false,
								'order' => 'ASC',);
							$terms = get_terms($taxonomy_list);
						?>
                	<!-- Start loop for product type -->
                	<?php foreach ($terms as $term) : ?>
                    <li class="product-taxonomies-list">
                        <a href="<?= get_term_link($term); ?>">
                            <?= strtoupper($term->name); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
				</ul>
				</div>
		</header><!-- .page-header -->
        <div class="product-container">

			<?php while ( have_posts() ) : the_post(); ?>
			
			  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  
                <a class="footer-logo-link" href="<?php echo get_permalink() ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>
				</a>
				
                <div class="text-container">
					<?php the_title( '<div class="product-name">', '</div>' ); ?>
					<div class="product-dots"></div>
					<div class="product-price"><?php echo CFS()->get('product_price'); ?></div>
				</div>
				
			</article><!-- #post-## -->
			
            <?php endwhile; ?>
            </div>
			<?php the_posts_navigation(); ?>
			
		<?php else : ?>
		
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			
		<?php endif; ?>
		
        </div> <!-- end of product page -->
        </main><!-- #main -->
    </div><!-- #primary -->
    
<?php get_footer(); ?>
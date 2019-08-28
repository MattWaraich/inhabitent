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
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<!-- Products -->
		<div class="product-content">
			<header class="page-header">
				<h1 class="page-title">SHOP STUFF</h2>
				<ul class="product-type-list">
					<li>
						<p>
							<a href="#">DO</a>
						</p>
					</li>
					<li>
						<p>
							<a href="#">EAT</a>
						</p>
					</li>
					<li>
						<p>
							<a href="#">SLEEP</a>
						</p>
					</li>
					<li>
						<p>
							<a href="#">WEAR</a>
						</p>
					</li>
			</header>
		</div> <!-- end of product page -->
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

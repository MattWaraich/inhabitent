<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<div id="content" class="site-content">
				<div class="main-content">
					<div id="content" class="site-content">

		</main><!-- #main -->
	</div><!-- #primary -->
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>

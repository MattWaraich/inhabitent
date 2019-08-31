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

<ul>
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
                               <?php the_post_thumbnail(); ?>
                           </div>
                    
                           <div class='front-page-post-wrapper'>
                               <div class='front-page-post-date'>
                                   <?php the_date() ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments');?>
                               </div>
                           </div>
                    
                           <div class='front-page-post-title'>
                               <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                           </div>
                           <div class='front-page-post-permalink'>
                               <a class="button" href="<?php the_permalink() ?>" rel="bookmark">Read Entry</a>
                           </div>
                       </div>
                            <?php endforeach; ?>
                    
            </div>
</section>


<h2 class="heading-adventure">Latest Adventures</h2>
            <div class="latest-adventure">

                <article id="adventure-1" class="first-adventure">
                    <img src="<?php echo get_template_directory_uri();?>/images/adventure-photos/canoe-girl.jpg">  
                    <div class="adventure-title-button">
                        <h3 class="entry-title">Getting Back to Nature in a Canoe</h3> <input type="button" value="READ MORE" class="homebutton" id="go-to-post" />
            </div><!-- .entry-button -->
				</article><!-- #post-## -->
				
                <article id="adventure-2" class="second-adventure">
				<img src="<?php echo get_template_directory_uri();?>/images/adventure-photos/beach-bonfire.jpg">  
                    <div class="adventure-title-button">
                        <h3 class="entry-title">A Night with Friends at the Beach</h3> <input type="button" value="READ MORE" class="homebutton" id="go-to-post" />
                    </div><!-- .entry-button -->
				</article><!-- #post-## -->
				
                <article id="adventure-3" class="third-adventure">
				<img src="<?php echo get_template_directory_uri();?>/images/adventure-photos/mountain-hikers.jpg">  
                    <div class="adventure-title-button">
                        <h3 class="entry-title">Taking in the View at Big Mountain</h3> <input type="button" value="READ MORE" class="homebutton" id="go-to-post" />
                    </div><!-- .entry-button -->
				</article><!-- #post-## -->
				
                <article id="adventure-4" class="fourth-adventure">
				<img src="<?php echo get_template_directory_uri();?>/images/adventure-photos/night-sky.jpg">  
                    <div class="adventure-title-button">
                        <h3 class="entry-title">Star-Gazing at the Night Sky</h3> <input type="button" value="READ MORE" class="homebutton" id="go-to-post" />
                    </div><!-- .entry-button -->
                </article><!-- #post-## -->
			</div>
			
            <div class="button-more-adventure">
                <input type="button" value="More Adventures" onClick="document.location.href='//localhost:3000/inhabitent/adventure/'" />
            </div><!-- .entry-button -->
				   
			
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
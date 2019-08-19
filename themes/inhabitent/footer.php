<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>


			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="contact-container">
					<div class="site-info">		
							<div class="contact-info">
								<h3>Contact Info</h3> <!-- span tag the social media icons -->
								<p>
									<i class="fa fa-envelope">
									
									</i>
									<a href="mailto:mattsinghwaraich@gmail.com">mattsinghwaraich@gmail.com</a>
								</p>
								<p>
									<i class="fa fa-phone">
									
									</i>	
									<a href="604-652-4556">604-652-4556</a>
								</p>
							</div> <!-- end of contact info -->

							<div class="business-hours">
								<h3>Business Hours</h3>
								<p><b>Monday-Friday:</b> 9am-5pm</p>
								<p><b>Saturday:</b> 10am-2pm</p>
								<p><b>Sunday:</b> closed</p>
							</div> <!-- end of business hours -->

							<div class="footer-logo">
								<img class="footer-logo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent logo">							
							</div> <!-- logo -->

							<div class="copy">
								<p>COPYRIGHT © 2019 INHABITENT</p>
							</div>
						<div> <!-- end of site info -->
					</div> <!-- end of contact container -->


		




					<?php wp_footer(); ?>
					</div>
				</div><!-- .site-info -->
				
			</footer><!-- #colophon -->
		</div><!-- #page -->
	</body>
</html>

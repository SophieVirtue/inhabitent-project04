<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			  <div class="container-width">	
				<div class="site-info">
					<div class="contact-info">
					    <h3>Contact Info</h3>
                        <i class="fas fa-envelope"><a href=" "><span class="email"> info@inhabitent.com</span></a></i>
						<i class="fas fa-phone"><a href=" "><span class="phone"> 778-456-7891</span></a></i>
						<div class="social-icon">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-google-plus-square"></i>
						</div>
					</div><!-- .contact-info -->
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><span class="days">Monday-Friday: </span>9am to 5pm</p>
						<p><span class="days">Saturday: </span>10am to 2pm</p>
						<p><span class="days">Sunday: </span>Closed</p>
					</div><!--.business-hours -->
					<div class="logo-footer">
                    	<a href="<?php echo get_bloginfo('url');?>">
                      		<img class="footer-logo" src='<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-text.svg'  alt='Inhabitent Logo'>
                    	</a>
                    </div><!-- .logo-footer -->
				</div><!-- .site-info -->
				<p class="copyright">Copyright &copy 2019 Inhabitent</p>
			  </div><!-- .container-width -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

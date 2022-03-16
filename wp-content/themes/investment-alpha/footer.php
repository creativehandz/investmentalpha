/<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Investment_Alpha
 */

?>

	<footer id="colophon" class="site-footer" style="display:none;">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'investment-alpha' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'investment-alpha' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'investment-alpha' ), 'investment-alpha', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.1.js"></script>
<?php wp_footer(); ?>
<script>
         $(document).ready(function() {
           $('.owl-carousel').owlCarousel({
             loop: true,
             margin: 0,
             responsiveClass: true,
			 autoplay:5000,
			 autoplayHoverPause:false,
             responsive: {
               0: {
                 items: 1,
                 nav: true
               },
               600: {
                 items: 1,
                 nav: false
               },
               1000: {
                 items: 1,
                 nav: true,
                 loop: true,
                 margin: 0
               }
             }
           })
         })
      </script>
      <script>
         $('.carousel').carousel({
         interval: 5000,
         touch:true,
         wrap:true,
         })
      </script>
	  
</body>
</html>
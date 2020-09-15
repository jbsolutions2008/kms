<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="footer-wrapper" id="footer-wrapper" style="background-image:url('/app/uploads/2020/09/finish-dozens-bg.jpg');">
	<footer class="site-footer" id="colophon">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-between footer-bottom">
				<div class="footer-bottom-left">
					<p class="copyright text-white fs-14">&copy; <?= date('Y') ?> KMS. 2200 Magnolia Avenue S, Suite 100-A, Birmingham, AL 35205</p>
				</div>
				<div class="footer-bottom-right d-flex flex-wrap align-items-center justify-content-start">
					<span class="text-white fs-14"><a href="tel:(205) 731-7372" target="_blank">(205) 731-7372</a></span>
					<span class="text-white fs-14"><a href="mailto:solutions@kempms.net" target="_blank"><u>solutions@kempms.net</u></a></span>
					<?php wp_nav_menu(
					array(
						'theme_location'  => 'social-menu',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'social-menu-icons',
						'fallback_cb'     => '',
						'menu_id'         => 'social-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	</div><!-- wrapper end -->

</div><!-- /#page -->

<?php wp_footer(); ?>
</body>
</html>
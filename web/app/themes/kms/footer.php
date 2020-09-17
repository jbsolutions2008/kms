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
$footer_text  = get_field( 'kms_footer_text', 'options' );
$form_short_code  = get_field( 'kms_form_short_code', 'options' );
$form_short_code  = get_field( 'kms_form_short_code', 'options' );
$gradient_box_section =  get_field('kms_gradient_box_section', 'options');
$section_background_image 	= $gradient_box_section['kms_section_background_image'];
$title 	= $gradient_box_section['kms_title'];
$boxes 	= $gradient_box_section['kms_boxes'];
$copy_write_text  = get_field( 'kms_copy_write_text', 'options' );
$footer_address  = get_field( 'kms_footer_address', 'options' );
$footer_phone_number  = get_field( 'kms_footer_phone_number', 'options' );
$footer_email_address  = get_field( 'kms_footer_email_address', 'options' );
?>
<!-- Newsletter Form Section -->
<section class="newsletter-section">
	<div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-between">
			<div class="newsletter-title h6 font-default"><?=$footer_text ?></div>
			<div class="gravity-main newsletter-form"><?php echo do_shortcode($form_short_code); ?></div>
		<div>
	</div>
</section>
<div class="footer-wrapper" id="footer-wrapper" style="background-image:url(<?=$section_background_image['url']?>);">
	<footer class="site-footer" id="colophon">
		<div class="container">
			<div class="footer-top">
				<div class="d-flex flex-wrap align-items-center justify-content-between finish-dozens">
					<div class="d-flex flex-wrap align-items-center finish-dozens-title"><h2 class="mb-0 mt-0 text-white"><?=$title?> </h2></div>
					<div class="d-flex flex-wrap align-items-stretch justify-content-between finish-dozens-box-items">
					   <?php foreach($boxes as $data):?>
						<div class="bg-white d-flex flex-wrap finish-dozens-box-item">
							<h5 class="mt-0"><?=$data['kms_title'] ?></h5>
							<p class="mt-0"><?=$data['kms_short_description'] ?></p>
							<p class="mb-0 mt-auto"><a href="<?=$data['kms_button_url'] ?>" class="btn-link fs-18"><?=$data['kms_button_label'] ?> <span class="arrow">&#8250;</span></a></p>
						</div>
						<?php  endforeach;?>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-center justify-content-between footer-bottom">
				<div class="footer-bottom-left">
					<p class="copyright text-white fs-14">&copy; <?= date('Y') ?> <?=$copy_write_text ?> <?=$footer_address ?></p>
				</div>
				<div class="footer-bottom-right d-flex flex-wrap align-items-center justify-content-start">
					<span class="text-white fs-14"><a href="tel:<?=$footer_phone_number ?>" target="_blank"><?=$footer_phone_number ?></a></span>
					<span class="text-white fs-14"><a href="mailto:<?=$footer_email_address ?>" target="_blank"><u><?=$footer_email_address ?></u></a></span>
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
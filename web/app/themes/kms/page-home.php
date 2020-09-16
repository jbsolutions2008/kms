<?php
/**
 * The template for displaying HOME page.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
$content_section =  get_field('kms_content_section');
$title =  $content_section['kms_title'];
$descriptions =  $content_section['kms_descriptions'];
?>
<div class="wrapper" id="page-wrapper">
	<div id="content">
		<main class="site-main" id="main">

		<!-- Home Page Hero Header Section -->
		<section class="bg-light-grey pt-0 pb-0 h-100 header-hero-section">
			<!-- Swiper -->
			<div class="swiper-container hero-swiper-container hero-slide-top h-100">
			<div class="swiper-wrapper h-100">
			<?php if( have_rows('kms_hero_section') ):
				 while( have_rows('kms_hero_section') ) : the_row();
				 $parent_background_image = get_sub_field('kms_background_image');	
				 $parent_title = get_sub_field('kms_title');
				 $parent_short_descriptions = get_sub_field('kms_short_descriptions');
				 $parent_button_label = get_sub_field('kms_button_label');
				 $parent_button_url = get_sub_field('kms_button_url');
				 ?>
				<div class="swiper-slide d-flex align-items-center justify-content-center h-100" style="background-image:url(<?=$parent_background_image?>);">
					<div class="header-hero-container container-lg">
						<h2 class="section-title h1 text-white text-uppercase line-height-normal mt-0"><span><?=$parent_title?></span></h2>
						<P class="text-white h6 font-default line-height-normal mt-0"><?=$parent_short_descriptions?></P>
						<p class="mb-0"><a href="<?=$parent_button_url?>" class="btn"><?=$parent_button_label?> <span class="arrow">&#8250;</span></a></p>
					</div>
				</div>
				<?php endwhile;
				endif;?>
			</div>
		</div>
		<div class="swiper-container hero-slide-thumbs">
			<div class="swiper-wrapper">
			<?php if( have_rows('kms_hero_section') ):
				 while( have_rows('kms_hero_section') ) : the_row();
				 $bottom_tab_title = get_sub_field('kms_bottom_tab_title');
				 $bottom_tab_sub_title = get_sub_field('kms_bottom_tab_sub_title');
				 ?>
					<div class="swiper-slide">
						<h6 class="mt-0 mb-0 text-white fs-17 font-default fw-600"><?=$bottom_tab_title?></h6>
						<p class="mt-0 mb-0 text-white fs-14"><?=$bottom_tab_sub_title?></p>
					</div>
			<?php endwhile;
				endif; ?>
			</div>
		</div>	
</section>
<!-- Handle The Rest Section -->
<section class="handle-rest-section">
	<div class="container-lg">
		<div class="d-flex flex-wrap align-items-center justify-content-between handle-rest-in">
			<h4 class="mt-0 mb-0"><?=$title?></h4>
			<p class="mt-0 mb-0"><?=$descriptions?></p>
		</div>
	</div>
</section>
</main><!-- #main -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
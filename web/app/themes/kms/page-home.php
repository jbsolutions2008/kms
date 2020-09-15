<?php
/**
 * The template for displaying HOME page.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
/*Header Section*/
?>

<div class="wrapper" id="page-wrapper">
	<div id="content">
		<main class="site-main" id="main">

	<!-- Home Page Hero Header Section -->
	<section class="bg-light-grey header-hero-section pt-0 pb-0" style="background-image:url('/app/uploads/2020/09/hero-slide1.jpg');">
		<div class="header-hero-container container-lg">
			<h2 class="section-title h1 text-white text-uppercase line-height-normal mt-0 mb-0"><span>Innovation in Technology</span></h2>
			<P class="text-white h6 line-height-normal">KMS represents the interest of owners from the beginning of a project to the end. We can handle site selections, due diligence, design management to project management and close-out.</P>
			<p class="mb-0"><a href="#" class="btn">Partner with us <i class="fas fa-angle-right"></i></a></p>
		</div>
	</section>


</main><!-- #main -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
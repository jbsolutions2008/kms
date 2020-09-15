<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper" id="single-wrapper">

	<div id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper" id="page-wrapper">

	<div id="content" tabindex="-1">

		<main class="site-main" id="main">

			<header class="page-header">

				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
				'understrap' ); ?></h1>

			</header><!-- .page-header -->

			<div class="page-content">

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
				'understrap' ); ?></p>

			</div><!-- .page-content -->

		</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

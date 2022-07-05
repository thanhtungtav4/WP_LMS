<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learnpress
 */

get_header();
?>

	<main id="primary" class="site-main">
			<div class="c-learn">
				<div class="l-container">
					<div class="c-learn_inner">
						<ul>
								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
						</ul>
					<div>
				</div>
			</div>
	</main><!-- #main -->

<?php

// get_sidebar();
get_footer();

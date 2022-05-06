<?php
/**
 * Template for displaying course audience
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */


do_action( 'tutor_course/single/before/audience' );

$target_audience = tutor_course_target_audience();

if ( empty( $target_audience ) ) {
	return;
}

if ( is_array( $target_audience ) && count( $target_audience ) ) {
	?>

	<div class="tutor-course-details-widget tutor-mt-40">
		<h3 class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
			<?php _e('Audience', 'tutor'); ?>
		</h3>
		<ul class="tutor-course-details-widget-list tutor-fs-6 tutor-color-black">
			<?php
				foreach ($target_audience as $audience){
					echo "<li class='tutor-d-flex tutor-mb-12'><span class='tutor-icon-mark tutor-color-primary tutor-mr-12' area-hidden='true'></span><span>{$audience}</span></li>";
				}
			?>
		</ul>
	</div>

<?php } ?>

<?php do_action( 'tutor_course/single/after/audience' ); ?>

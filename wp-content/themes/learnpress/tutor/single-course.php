<?php
/**
 * Template for displaying single course
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

// Prepare the nav items
$course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), get_the_ID() );

tutor_utils()->tutor_custom_header();
do_action('tutor_course/single/before/wrap');
?>
<div <?php tutor_post_class('tutor-full-width-course-top tutor-course-top-info tutor-page-wrap tutor-wrap-parent'); ?>>
    <div class="tutor-course-details-page tutor-container">
        <?php (isset($is_enrolled) && $is_enrolled) ? tutor_course_enrolled_lead_info() : tutor_course_lead_info(); ?>
        <div class="tutor-row tutor-gx-xl-5">
            <main class="tutor-col-xl-8">
                <?php tutor_utils()->has_video_in_single() ? tutor_course_video() : get_tutor_course_thumbnail(); ?>
	            <?php do_action('tutor_course/single/before/inner-wrap'); ?>
                <div class="tutor-course-details-tab tutor-mt-32">
                    <div class="tutor-is-sticky">
                        <?php tutor_load_template( 'single.course.enrolled.nav', array('course_nav_item' => $course_nav_item ) ); ?>
                    </div>
                    <div class="tutor-tab tutor-pt-24">
                        <?php foreach( $course_nav_item as $key => $subpage ) : ?>
                            <div id="tutor-course-details-tab-<?php echo $key; ?>" class="tutor-tab-item<?php echo $key == 'info' ? ' is-active' : ''; ?>">
                                <?php
                                    do_action( 'tutor_course/single/tab/'.$key.'/before' );

                                    $method = $subpage['method'];
                                    if ( is_string($method) ) {
                                        $method();
                                    } else {
                                        $_object = $method[0];
                                        $_method = $method[1];
                                        $_object->$_method(get_the_ID());
                                    }

                                    do_action( 'tutor_course/single/tab/'.$key.'/after' );
                                ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
	            <?php do_action('tutor_course/single/after/inner-wrap'); ?>
            </main>

            <aside class="tutor-col-xl-4">
                <div class="tutor-single-course-sidebar tutor-mt-40 tutor-mt-xl-0">
                    <?php do_action('tutor_course/single/before/sidebar'); ?>
                    <?php tutor_load_template('single.course.course-entry-box'); ?>
                    <?php tutor_course_requirements_html(); ?>
                    <?php tutor_course_tags_html(); ?>
                    <?php tutor_course_target_audience_html(); ?>
                    <?php do_action('tutor_course/single/after/sidebar'); ?>
                </div>
            </aside>
        </div>
    </div>
</div>

<?php do_action('tutor_course/single/after/wrap'); ?>
<div class="l-container">
    <div class="c-learn_inner">
        <h3>Khóa học liên quan</h3>
        <ul class="courses-list">
        <?php
                if(get_field('chon_khoa_hoc_lien_quan')){
                    $query_args = array(
                        'post_type' => 'courses',
                        'post_status'   => 'publish',
                        'order'         => 'desc',
                        'posts_per_page'=> 3,
                        'nopaging' => false,
                        'post__in'=> get_field('chon_khoa_hoc_lien_quan'),
                    );
                }
                else{
                    $query_args = array(
                        'post_type' => 'courses',
                        'post_status'   => 'publish',
                        'order'         => 'desc',
                        'posts_per_page'=> 3,
                        'nopaging' => false
                    );
                }
                $Query = new WP_Query($query_args);
                if ($Query->posts) {
                  foreach ($Query->posts as $key => $isPost)  { ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $isPost->ID ), 'full' ); ?>

                  <li class="c-learn_item">
                    <div class="c-learn_img"><img loading="lazy" src="<?php echo $image[0] ?>" data-src="<?php echo $image[0] ?>" alt="<?php echo $isPost->post_title ?>"></div>
                    <div class="c-learn_content">
                      <h4><?php echo $isPost->post_title ?></h4>
                      <p><?php echo $isPost->post_excerpt ?></p><a href="/courses/<?php echo $isPost->post_name?>">Xem Thêm</a>
                    </div>
                  </li>
                 <?php }
                }else{
                    echo 'No results!';
                }
                ?>
        </ul>
    </div>
</div>
<?php
tutor_utils()->tutor_custom_footer();

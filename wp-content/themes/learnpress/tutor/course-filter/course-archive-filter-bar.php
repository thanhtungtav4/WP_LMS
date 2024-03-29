<?php
    /**
     * @package TutorLMS/Templates
     * @version 1.4.3
     */

	$sort_by = '';
	if(isset( $_POST['tutor_course_filter'] )) {
        $sort_by = tutor_sanitize_data( $_POST['tutor_course_filter'] );
    }
?>

<div class="tutor-course-filter-wrap">
	<div class="tutor-course-archive-results-wrap">
		<?php
            global $wp_query;
            $courseCount = $wp_query->found_posts;
            $count_text = $courseCount>1 ? __("%s Các khóa học", "tutor") : __("%s Khóa học", "tutor");
            echo sprintf($count_text, "<strong>{$courseCount}</strong>");
		?>
	</div>

    <div class="tutor-course-archive-filters-wrap">
        <form class="tutor-course-filter-form" method="get">
            <select class="tutor-form-select" name="tutor_course_filter">
                <option value="newest_first" <?php selected("newest_first", $sort_by); ?> ><?php esc_html_e("Ngày phát hành (newest first)", "tutor");
					?></option>
                <option value="oldest_first" <?php selected("oldest_first", $sort_by); ?>><?php esc_html_e("Ngày phát hành (oldest first)", "tutor"); ?></option>
                <option value="course_title_az" <?php selected("course_title_az", $sort_by); ?>><?php esc_html_e("Tên khóa học (a-z)", "tutor"); ?></option>
                <option value="course_title_za" <?php selected("course_title_za", $sort_by); ?>><?php esc_html_e("Tên khóa học (z-a)", "tutor"); ?></option>
            </select>
        </form>
    </div>
</div>

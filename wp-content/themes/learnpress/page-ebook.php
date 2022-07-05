<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learnpress
 */

get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$ebook_list = get_posts( array(
  'post_type' => array('ebook'),
  'post_status' => 'publish',
  'posts_per_page' => 3,
  'orderby'	=> 'post_date',
	'order'         => 'DESC',
  'paged'         => $paged
) );
?>

<main class="l-main">
        <div class="c-learn ebook">
          <div class="l-container">
            <h1 class="ttl">Ebook by FUTURE BRAND VIETNAM</h1>
            <p class="text">
              Bạn muốn tìm hiểu về Brand , Digital hay Trade Marketing ? <br>Hãy khám phá thế giới marketing trong ebook của FUTURE BRAND VIETNAM</p>
            <div class="c-learn_inner">
              <ul class="ebook-list">
              <?php if ( $ebook_list )
                { foreach ( $ebook_list as $item ) : setup_postdata( $item ); ?>
                <li class="c-learn_item">
                  <div class="c-learn_img">
                    <img class="lazyload" loading="lazy" width="320" height="223"  data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post_item->ID), 'full')[0]; ?>" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($item->ID), 'full')[0]; ?>" alt="<?php echo($item->post_title)  ?>" alt="<?php echo($item->post_title)  ?>"></div>
                  <div class="c-learn_content">
                    <a class="tag_a" href="<?php the_permalink($item->ID); ?>">
                      <h4><?php echo($item->post_title)  ?></h4>
                      <div class="c-learn_category">Ebook</div>
                      <p class="c-learn_icon">
                        <img class="lazyload" loading="lazy"  width="24" height="24" data-src="<?php echo get_template_directory_uri();?>/assets/images/pin_fill.svg" src="<?php echo get_template_directory_uri();?>/assets/images/pin_fill.svg"  alt="<?php echo($item->post_title)  ?>">
                      </p>
                      <p class="ebook_excerpt"><?php echo get_the_excerpt($item->ID); ?></p>
                    </a>
                    <div class="c-btn">
                      <a class="c-btn_ebook c-btn_dowload" href="<?php the_permalink($item->ID); ?>">Tải Xuống Ebook</a>
                    </div>
                  </div>
                </li>
              <?php
                endforeach;
                wp_reset_postdata();
                }
              ?>
              </ul>
              <div id="eload-more" class="c-btn"><a class="c-btn_ebook" href="#!">Xem thêm Ebook</a></div>
            </div>
          </div>
        </div>
      </main>

<?php
//get_sidebar();
get_footer();

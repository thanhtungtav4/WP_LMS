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
global $post;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$myposts = get_posts( array(
  'post_type' => array('post'),
  'post_status' => 'publish',
) );
$bigpost = get_posts( array(
  'post_type' => array('post'),
  'post_status' => 'publish',
  'posts_per_page' => 1,
) );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_list = get_posts( array(
  'post_type' => array('post'),
  'post_status' => 'publish',
  'posts_per_page' => 6,
  'category_name'         => 'kien-thuc-branding',
  'orderby'	=> 'post_date',
	'order'         => 'DESC',
) );

$post_list02 = get_posts( array(
  'post_type' => array('post'),
  'post_status' => 'publish',
  'posts_per_page' => 6,
  'category_name'         => 'kien-thuc-marketing',
  'orderby'	=> 'post_date',
	'order'         => 'DESC',
) );
$i = 0;
?>
      <main class="l-main">
        <div class="l-container">
          <div class="c-banner">
            <div class="c-banner_inner">
              <?php if ( $bigpost )
                { foreach ( $bigpost as $postbig ) : setup_postdata( $postbig ); ?>
                    <div class="c-banner_big">
                      <?php $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($postbig->ID), 'full')[0];
                      ?>
                      <a class="c-banner_img" href="<?php the_permalink($postbig->ID); ?>">
                        <img src="<?php $thumbnail_src ? print $thumbnail_src : print "https://picsum.photos/800/478" ?>" alt="<?php echo($postbig->post_title); ?>" width="816" height="378">
                      </a>
                      <div class="c-banner_content">
                        <a class="tag_a" href="<?php the_permalink($postbig->ID); ?>">
                        <div class="c-banner_category"><?php echo get_the_category($postbig->ID)[0]->name; ?>  </div>
                        <h3 class="c-banner_ttl"><?php echo($postbig->post_title); ?></h3>
                        <p class="c-banner_time"><?php echo get_the_category($postbig->ID)[0]->name; ?>  | <?php get_field('time_read', $postbig->ID) ? print get_field('time_read', $postbig->ID) : print'15' ; ?> MIN READ</p>
                        </a>
                      </div>
                    </div>
              <?php
                endforeach;
                wp_reset_postdata();
                }
              ?>
              <div class="c-banner_smail">
                <div class="c-banner_btn">Blog</div>
                <ul>
                  <?php if ( $myposts )
                    { foreach ( $myposts as $post ) : setup_postdata( $post ); $i++; ?>
                     <?php if ( $i >=2 && $i <=5 ) :?>
                      <li>
                        <?php $time = get_field('time_read', $post->ID); ?>
                        <a href="<?php the_permalink(); ?>">
                          <h3><?php the_title(); ?></h3>
                          <p><?php echo get_the_category()[0]->cat_name; ?>  | <?php $time ? print $time : print'15' ; ?> MIN READ</p>
                        </a>
                      </li>
                      <?php endif ; ?>
                  <?php
                    endforeach;
                    wp_reset_postdata();
                    }
                    ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="c-line">
        <div class="c-learn blog">
          <div class="l-container">
            <div class="c-learn_inner">
              <h3>Kiến thức Branding</h3>
              <ul class="publication-list courses-list">
              <?php if ( $post_list )
                { foreach ( $post_list as $post_item ) : setup_postdata( $post_item ); ?>
                    <li class="c-learn_item">
                      <div class="c-learn_img">
                        <img class="lazyload" width="320" height="223" loading="lazy" data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post_item->ID), 'full')[0]; ?>" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post_item->ID), 'full')[0]; ?>" alt="<?php echo($post_item->post_title)  ?>"></div>
                      <div class="c-learn_content">
                        <a class="tag_a" href="<?php the_permalink($post_item->ID); ?>">
                          <p class="c-learn_category"><?php echo get_the_category($post_item->ID)[0]->name; ?></p>
                          <h4><?php echo($post_item->post_title)  ?></h4>
                          <p class="c-learn_view"><?php echo getCrunchifyPostViews($post_item->ID); ?></p>
                        </a>
                      </div>
                    </li>
              <?php
                endforeach;
                wp_reset_postdata();
                }
              ?>
              </ul>
              <div id="load-more" class="c-btn"><a class="c-btn_ebook" href="/category/kien-thuc-marketing/">Xem thêm bài viết</a></div>
              <h3>Kiến thức Branding</h3>
              <ul class="publication-list courses-list">
              <?php if ( $post_list02 )
                { foreach ( $post_list02 as $post_item02 ) : setup_postdata( $post_item02 ); ?>
                    <li class="c-learn_item">
                      <div class="c-learn_img">
                        <img class="lazyload" width="320" height="223" loading="lazy" data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post_item02->ID), 'full')[0]; ?>" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post_item02->ID), 'full')[0]; ?>" alt="<?php echo($post_item02->post_title)  ?>"></div>
                      <div class="c-learn_content">
                        <a class="tag_a" href="<?php the_permalink($post_item02->ID); ?>">
                          <p class="c-learn_category"><?php echo get_the_category($post_item02->ID)[0]->name; ?></p>
                          <h4><?php echo($post_item02->post_title)  ?></h4>
                          <p class="c-learn_view"><?php echo getCrunchifyPostViews($post_item02->ID); ?></p>
                        </a>
                      </div>
                    </li>
              <?php
                endforeach;
                wp_reset_postdata();
                }
              ?>
              </ul>
              <div id="load-more" class="c-btn"><a class="c-btn_ebook" href="/category/kien-thuc-branding/">Xem thêm bài viết</a></div>
            </div>
          </div>
        </div>
      </main>
<?php
//get_sidebar();
get_footer();

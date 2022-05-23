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
  'orderby' => 'ID',
  'order' => 'DESC',
) );
$bigpost = get_posts( array(
  'post_type' => array('post'),
  'post_status' => 'publish',
  'orderby' => 'ID',
  'posts_per_page' => 1,  
  'order' => 'DESC',
) );
$i = 0;
?>
      <main class="l-main">
        <div class="l-container">
          <div class="c-banner">
            <div class="c-banner_inner">
              <?php if ( $bigpost ) 
                { foreach ( $bigpost as $postbig ) : setup_postdata( $postbig ); ?>
                    <?php  var_dump(get_the_post_thumbnail_url($postbig->ID)); ?>
                    <div class="c-banner_big">
                      <a class="c-banner_img" href="<?php the_permalink($postbig->ID); ?>">
                        <img src="" alt="" width="816" height="378" srcset="">
                      </a>
                      <div class="c-banner_content">
                        <a class="tag_a" href="<?php the_permalink($postbig->ID); ?>">
                        <div class="c-banner_category"><?php echo get_the_category($postbig->ID)[0]->name; ?>  </div>
                        <h3 class="c-banner_ttl"><?php echo($postbig->post_title); ?></h3>
                        <p class="c-banner_time"><?php echo get_the_category($postbig->ID)[0]->name; ?>  | <?php the_field('time_read', $postbig->ID); ?> MIN READ</p>
                        </a>
                      </div>
                    </div>
              <?php
                endforeach;
                wp_reset_postdata();
                }
              ?>
              <div class="c-banner_smail">
                <div class="c-banner_btn">Marketing Strage</div>
                <ul>
                  <?php if ( $myposts ) 
                    { foreach ( $myposts as $post ) : setup_postdata( $post ); $i++; ?>
                     <?php if ( $i >=2 && $i <=6 ) :?>
                      <li>
                        <a href="<?php the_permalink(); ?>">
                          <h3><?php the_title(); ?></h3>
                          <p><?php echo get_the_category()[0]->cat_name; ?>  | <?php the_field('time_read'); ?> MIN READ</p>
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
              <h3>New Posts</h3>
              <ul>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazyload" width="320" height="223" loading="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <a class="tag_a" href="#">
                      <p class="c-learn_category">Marketing Strage</p>
                      <h4>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h4>
                      <p class="c-learn_view">111905</p>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </main>
<?php
//get_sidebar();
get_footer();

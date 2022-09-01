<main class="l-main">
        <div class="l-container">
          <div class="c-detail">
            <!-- <ul class="c-breadcrumb">
              <li><a href="/"><img src="<?php //echo get_template_directory_uri();?>/assets/images/home.svg"></a></li>
              <li><a href="/blog">BLOG</a></li>
              <li><a href="#"><?php //echo get_the_category()[0]->name ?></a></li>
            </ul> -->
            <ul class="c-breadcrumb">
            <?php
              if ( function_exists('yoast_breadcrumb') ) {
               yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
              }
              ?>
            </ul> 
            <h1><?php the_title() ?></h1>
            <div class="block_flex">
              <div class="img">
                <img src="<?php wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium')[0] ? print wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium')[0] : 'https://picsum.photos/1900/578' ?>">
              </div>
              <div class="content">
                <?php the_excerpt() ?>
              </div>
            </div>
            <dl class="c-footer_social">
              <dd><a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png"></a></dd>
              <dd><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink() ?>"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png"></a></dd>
              <dd><a target="_blank" href="#"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png"></a></dd>
            </dl>
            <div class="l-container c-content">
            <?php the_content() ?>
            </div>
          </div>
          <?php if(get_field('is_show')) :?>
          <div class="c-avd">
            <div class="c-avd_inner">
              <div class="c-avd_img"><img class="lazy-loaded-image lazy" data-src="<?php (get_field('image')) ? print the_field('image') : print get_template_directory_uri().'/assets/images/img02.png' ?>" src="<?php (get_field('image')) ? print the_field('image') : print get_template_directory_uri().'/assets/images/img02.png' ?>"></div>
              <div class="c-avd_content">
                <h3><?php echo the_field('tieu_de') ?></h3>
                <div class="c-avd_area">
                  <div class="c-avd_btn"><a class="shop" target="_blank" href="<?php the_field('link_dang_ky') ?>">Đăng ký</a></div>
                  <div class="c-avd_btn"><a class="play" target="_blank" href="<?php the_field('link_trailer') ?>">Trailer</a></div>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <?php if(get_field('show_ads')) : ?>
            <div class="l-container">
              <div class="c-detail">
                <div class="c-detail_img">
                  <a  href="<?php the_field('link_to_main') ?>" taget="_blank">
                    <img src="<?php the_field('image_main') ?>" data-src="<?php the_field('image_main') ?>">
                  </a>
                </div>
              </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="c-learn blog">
          <div class="l-container">
            <div class="c-learn_inner">
              <h3>Bài viết liên quan</h3>
              <ul class="publication-list courses-list">
              <?php
              if(get_field('bai_viet_lien_quan')){
                $post_list = get_posts( array(
                  'post_type' => array('post'),
                  'post_status' => 'publish',
                  'posts_per_page' => 3,
                  'orderby'	=> 'post_date',
                  'order'         => 'DESC',
                  'post__in'=> get_field('bai_viet_lien_quan'),
                ) );
              }
              else{
                $post_list = get_posts( array(
                  'post_type' => array('post'),
                  'post_status' => 'publish',
                  'posts_per_page' => 3,
                  'orderby'	=> 'post_date',
                  'order'         => 'DESC',
                ) );
              }
              ?>
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
            </div>
          </div>
        </div>
</main>
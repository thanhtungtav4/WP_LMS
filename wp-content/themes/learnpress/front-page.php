<?php get_header();?>
<main class="l-main">
        <div class="owl-carousel owl-theme">
          <div class="item" id="next"><img src="<?php echo get_template_directory_uri();?>/assets/images/slider02.jpg" alt="" sizes="" srcset=""></div>
          <div class="item" onclick="goToPrevCarouselPage()"><img src="<?php echo get_template_directory_uri();?>/assets/images/slider03.jpg" alt="" sizes="" srcset=""></div>
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/khoahoc.jpg" alt="" sizes="" srcset=""></div>
        </div>
        <div class="c-step">
          <div class="c-step_inner">
            <h3><?php the_field('tieu_de', 'option'); ?></h3>
            <p><?php the_field('mo_ta', 'option'); ?></p>
            <div class="l-container">
              <ul>
              <?php if( have_rows('image', 'option') ): ?>
                <?php while( have_rows('image', 'option') ) : the_row(); ?>
                  <li>
                  <figure>
                    <img loading="lazy"  src="<?php (get_sub_field('image_child') != null) ? print get_sub_field('image_child') : print 'https://picsum.photos/400/300'?>" data-src="<?php (get_sub_field('image_child') != null) ? print get_sub_field('image_child') : print 'https://picsum.photos/400/300'?>">
                    <figcaption><?php print get_sub_field('name_child') ?></figcaption>
                  <figure>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="c-master">
          <h3>Diễn Giả</h3>
          <div class="l-container">
            <?php if( have_rows('dien_gia', 'option') ): ?>
              <?php while( have_rows('dien_gia', 'option') ) : the_row(); ?>
              <div class="item">
              <div class="item_img">
                <img loading="lazy"  src="<?php (get_sub_field('anh') != null) ? print get_sub_field('anh') : print get_template_directory_uri() .'/assets/images/master.png' ?>" data-src="<?php (get_sub_field('anh') != null) ? print get_sub_field('anh') : print get_template_directory_uri() .'/assets/images/master.png' ?>">
              </div>
              <div class="item_content">
                <h4> <?php echo get_sub_field('ten'); ?></h4>
                <p>
                <?php echo get_sub_field('chức_vụ'); ?> <br><?php echo get_sub_field('extra'); ?></p>
              </div>
            </div>
              <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
        <div class="c-lnew">
          <div class="l-container">
            <div class="c-lnew_content">
              <h3><?php the_field('tieu_de_khoa_học', 'option'); ?></h3>
              <p><?php the_field('mo_ta_khoa_học', 'option'); ?></p><a href="/courses/">Khám phá các khóa học</a>
            </div>
            <div class="c-lnew_img"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/new_courser.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/new_courser.png" alt=""></div>
          </div>
        </div>
        <div class="c-info"> <a href="/ve-chung-toi/"><img loading="lazy" src="<?php the_field('image', 'option'); ?>" data-src="<?php the_field('image', 'option'); ?>" alt=""></a></div>
        <div class="c-learn blog">
          <div class="l-container">
            <div class="c-learn_inner"><br>
              <h3>CÁC KHÓA HỌC</h3>
              <ul>
                <?php
                  $query_args = array(
                    'post_type' => 'courses',
                    'post_status'   => 'publish',
                    'order'         => 'desc',
                    'posts_per_page'=> 2,
                    'nopaging' => false
                );
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
        </div>
        <div class="c-ebook">
          <div class="l-container">
            <div class="c-ebook_inner">
              <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/union.jpg" data-src="<?php echo get_template_directory_uri();?>/assets/images/union.jpg" alt=""></div>
              <div class="content">
                <h3><?php the_field('kham_pha_the_gioi_marketing', 'option'); ?></h3>
                <p><?php the_field('mo_ta_the_gioi_marketing', 'option'); ?></p><a href="/blog/">KHÁM PHÁ BLOG</a>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php get_footer();?>
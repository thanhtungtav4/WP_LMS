<main class="l-main">
        <div class="l-container">
          <div class="c-detail">
            <ul class="c-breadcrumb">
              <li><a href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/home.svg"></a></li>
              <li><a href="/blog">BLOG</a></li>
              <li><a href="#"><?php echo get_the_category()[0]->name ?></a></li>
            </ul>
            <h1><?php the_title() ?></h1>
            <div class="c-detail_img"><img src="<?php wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] ? print wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] : 'https://picsum.photos/1900/578' ?>"></div>
            <dl class="c-footer_social">
              <dd><a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png"></a></dd>
              <dd><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink() ?>"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png"></a></dd>
              <dd><a target="_blank" href="#"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png"></a></dd>
            </dl>
            <div class="l-container c-content">
            <?php the_content() ?>
            </div>
          </div>
          <div class="c-avd">
            <div class="c-avd_inner">
              <div class="c-avd_img"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img02.png" src="<?php echo get_template_directory_uri();?>/assets/images/img02.png"></div>
              <div class="c-avd_content">
                <h3>Quản lý dự án quảng cáo</h3>
                <div class="c-avd_area">
                  <div class="c-avd_btn"><a class="shop" target="_blank" href="<?php the_field('link_dang_ky') ?>">Đăng ký</a></div>
                  <div class="c-avd_btn"><a class="play" target="_blank" href="<?php the_field('link_trailer') ?>">Trailer</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
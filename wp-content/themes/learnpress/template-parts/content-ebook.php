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
              <dd><a href="#"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png"></a></dd>
              <dd><a href="#"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png"></a></dd>
              <dd><a href="#"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png"></a></dd>
            </dl>
            <div class="l-container c-content">
            <?php the_content() ?>
            </div>
          </div>
        </div>
      </main>
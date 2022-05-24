<li class="c-learn_item">
  <div class="c-learn_img">
    <img class="lazyload" loading="lazy" width="320" height="223"  data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0] ?>" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0] ?>" alt=""></div>
  <div class="c-learn_content">
    <a class="tag_a" href="<?php the_permalink($post->ID); ?>">
      <h4><?php echo($post->post_title)  ?></h4>
      <div class="c-learn_category">Ebook</div>
      <p class="c-learn_icon">
        <img class="lazyload" loading="lazy"  width="24" height="24" data-src="<?php echo get_template_directory_uri();?>/assets/images/pin_fill.svg"  src="<?php echo get_template_directory_uri();?>/assets/images/pin_fill.svg" alt="">
      </p>
      <p class="ebook_excerpt"><?php echo get_the_excerpt($post->ID); ?></p>
    </a>
    <div class="c-btn">
      <a class="c-btn_ebook c-btn_dowload" href="<?php the_permalink($post->ID); ?>">Xem thêm bài viết</a>
    </div>
  </div>
</li>
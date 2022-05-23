<li class="c-learn_item">
 <div class="c-learn_img">
 <?php $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0];?>
   <img class="lazyload" width="320" height="223" loading="lazy" data-src="<?php $thumbnail_src ? print $thumbnail_src : print "https://picsum.photos/320/223" ?>"  src="<?php $thumbnail_src ? print $thumbnail_src : print "https://picsum.photos/320/223" ?>" alt=""></div>
 <div class="c-learn_content">
   <a class="tag_a" href="<?php the_permalink(); ?>">
     <p class="c-learn_category"><?php echo get_the_category($post->ID)[0]->name; ?></p>
     <h4> <?php echo($post->post_title)  ?></h4>
     <p class="c-learn_view"><?php echo getCrunchifyPostViews($post->ID); ?></p>
   </a>
 </div>
</li>
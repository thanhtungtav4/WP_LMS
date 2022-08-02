<?php get_header();?>
<main class="l-main">
        <div class="owl-carousel owl-theme">
          <div class="item" id="next"><img src="<?php echo get_template_directory_uri();?>/assets/images/slider02.jpg" alt="" sizes="" srcset=""></div>
          <div class="item" onclick="goToPrevCarouselPage()"><img src="<?php echo get_template_directory_uri();?>/assets/images/slider03.jpg" alt="" sizes="" srcset=""></div>
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/khoahoc.jpg" alt="" sizes="" srcset=""></div>
        </div>
        <div class="c-step">
          <div class="c-step_inner">
            <h3>Bước vào ngành Marketing cùng Tomorrow Marketers</h3>
            <p>Chúng tôi nỗ lực giúp các bạn trẻ yêu thích Marketing có một bước khởi đầu hoàn hảo vào <br>ngành Marketing chuyên nghiệp, thông qua:</p>
            <div class="l-container">
              <ul>
                <li><img loading="lazy" src="https://picsum.photos/400/300" data-src="https://picsum.photos/400/300" alt=""></li>
                <li><img loading="lazy" src="https://picsum.photos/400/300" data-src="https://picsum.photos/400/300" alt=""></li>
                <li><img loading="lazy" src="https://picsum.photos/400/300" data-src="https://picsum.photos/400/300" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="c-master">
          <h3>Diễn Giả</h3>
          <div class="l-container">
            <div class="item">
              <div class="item_img"><img loading="lazy"  src="<?php echo get_template_directory_uri();?>/assets/images/master.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/master.png"></div>
              <div class="item_content">
                <h4>Nguyễn Duy Anh</h4>
                <p>
                   Founder <br>@FutureBandVietNam</p>
              </div>
            </div>
            <div class="item">
              <div class="item_img"><img loading="lazy"  src="<?php echo get_template_directory_uri();?>/assets/images/master.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/master.png"></div>
              <div class="item_content">
                <h4>Nguyễn Duy Anh</h4>
                <p>
                   Founder <br>@FutureBandVietNam</p>
              </div>
            </div>
            <div class="item">
              <div class="item_img"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/master.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/master.png"></div>
              <div class="item_content">
                <h4>Nguyễn Duy Anh</h4>
                <p>
                   Founder <br>@FutureBandVietNam</p>
              </div>
            </div>
          </div>
        </div>
        <div class="c-lnew">
          <div class="l-container">
            <div class="c-lnew_content">
              <h3>KHÓA HỌC MỚI</h3>
              <p>Khoá học cung cấp tư duy marketing nền tảng dành cho người mới bắt đầu, giúp hệ thống hoá kiến thức chuyên môn và định hướng lộ trình phát triển nghề nghiệp.Khoá học cung cấp tư duy marketing nền tảng dành cho người mới bắt đầu, giúp hệ thống hoá kiến thức chuyên môn và định hướng lộ trình phát triển nghề nghiệp.Khoá học cung cấp tư duy marketing nền tảng dành cho người mới bắt đầu, giúp hệ thống hoá kiến thức chuyên môn và định hướng lộ trình phát triển nghề nghiệp.Khoá học cung cấp tư duy marketing nền tảng dành cho người mới bắt đầu, giúp hệ thống hoá kiến thức chuyên môn và định hướng lộ trình phát triển nghề nghiệp.Khoá học cung cấp tư duy marketing nền tảng dành cho người mới bắt đầu, giúp hệ thống hoá kiến thức chuyên môn và định hướng lộ trình phát triển nghề nghiệp.</p><a href="/courses/">Khám phá các khóa học</a>
            </div>
            <div class="c-lnew_img"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/new_courser.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/new_courser.png" alt=""></div>
          </div>
        </div>
        <div class="c-info"> <a href="/ve-chung-toi/"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/img_info.jpg" data-src="<?php echo get_template_directory_uri();?>/assets/images/img_info.jpg" alt=""></a></div>
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

                <!-- <li class="c-learn_item">
                  <div class="c-learn_img"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/item_home.jpg" data-src="<?php echo get_template_directory_uri();?>/assets/images/item_home.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <h4>Maketing Foundation</h4>
                    <p>Khoá học cung cấp tư duy marketing nền tảng dành cho người mới bắt đầu, giúp hệ thống hoá kiến thức chuyên môn và định hướng lộ trình phát triển nghề nghiệp.</p><a href="http://">Xem Thêm</a>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
        <div class="c-ebook">
          <div class="l-container">
            <div class="c-ebook_inner">
              <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/union.jpg" data-src="<?php echo get_template_directory_uri();?>/assets/images/union.jpg" alt=""></div>
              <div class="content">
                <h3>KHÁM PHÁ THẾ GIỚI MARKETING</h3>
                <p>Adobe illustrator CC 2015 là phiên bản thiết kế đồ hoạ Ai thấp nhất phù hợp với cấu hình PC của mọi loại máy và dành cho người mới bắt đầu. Adobe illustrator CC</p><a href="/blog/">KHÁM PHÁ BLOG</a>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php get_footer();?>
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
            <h2>KHÁI QUÁT VỀ BRAND EQUITY VÀ CÁCH ÁP DỤNG TRONG MỘT CHIẾN DỊCH BRAND MARKETING</h2>
            <p>Brand Equity hay tài sản thương hiệu là một thuật ngữ dùng để chỉ giá trị của một thương hiệu đã đạt được và đã mang lại, và có thể được xem là: Chất lượng sản phẩm/ dịch vụ, trải nghiệm thương hiệu, hoặc cũng có thể là kết quả xây dựng định hướng hoặc tầm nhìn của thương hiệu,… và tất cả những giá trị đó đều được xem là tài sản của thương hiệu.<br>Hiểu rõ được thuật ngữ Brand Equity sẽ giúp các bạn Junior và Newbie rất nhiều trong việc phân tích các chiến dịch Brand Marketing của đối thủ và xây dựng định hướng để phát triển thương hiệu, Brand Equity được phân tích dựa vào 4 yếu tố sau:<br>👉 Mức độ nhận diện<br>👉 Sự Cảm nhận<br>👉 Lòng trung thành<br>👉 Lợi thế cạnh tranh<br>Để hiểu rõ hơn về thuật ngữ Brand Marketing này bạn có thể tham khảo Blog Future Brand của team chúng mình qua bài viết Brand Equity là gì nhé:<br>Link bài viết: https://futurebrandvietnam.com/brand-equity-la-gi/<br>----<br>Theo dõi ngay Fanpage #FutureBrandViệtNam nếu bạn muốn cập nhật thêm về kiến thức Branding và Brand Marketing</p>
          </div>
          <div class="c-ad">
            <div class="c-ad_inner">
              <div class="c-ad_img"><img class="lazy-loaded-image lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img02.png" src="<?php echo get_template_directory_uri();?>/assets/images/img02.png"></div>
              <div class="c-ad_content">
                <h3>Quản lý dự án quảng cáo</h3>
                <div class="c-ad_area">
                  <div class="c-ad_btn"><a class="shop" href="#">Đăng ký</a></div>
                  <div class="c-ad_btn"><a class="play" href="#">Trailer</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
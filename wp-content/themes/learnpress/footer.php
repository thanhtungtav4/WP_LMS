<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learnpress
 */

?>
<footer class="c-footer">
        <div class="l-container">
          <dl>
            <dt>Giới thiệu</dt>
            <dd>Future Brand Việt Nam cung cấp các khóa học trực tuyến e-learning và các nội dung chuyên về lĩnh vực Branding, Marketing</dd>
            <dl class="c-footer_social">
              <dd><a href="#"><img loading="lazy" class="lazy-loaded-image lazyload" width="28" height="28" data-src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png"></a></dd>
              <dd><a href="#"><img loading="lazy" class="lazy-loaded-image lazyload" width="28" height="28"  data-src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png"></a></dd>
              <dd><a href="#"><img loading="lazy" class="lazy-loaded-image lazyload" width="28" height="28" data-src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png"></a></dd>
            </dl>
          </dl>
          <dl>
            <dt>Danh mục</dt>
            <dd><a href="/courses/">Khóa học</a></dd>
            <dd><a href="/category/kien-thuc-branding/">Blog Brannding</a></dd>
            <dd><a href="/category/kien-thuc-marketing/">Blog Marketing</a></dd>
            <dd><a href="/ebook/">Ebook</a></dd>
            <dd><a href="/video/">Video</a></dd>
          </dl>
          <dl>
            <dt>Trợ giúp</dt>
            <dd><a href="/student-registration/">Đăng ký tài khoản</a></dd>
            <dd><a href="/dieu-khoan-xu-dung">Điều khoản sử dụng</a></dd>
            <dd><a href="/quyen-rieng-tu">Quyền riêng tư</a></dd>
          </dl>
          <dl>
            <dt>Liên hệ</dt>
            <dd>177 Nguyễn Thị Sáu, Thành Lộc, quận 12, thành phố Hồ Chí Minh</dd>
            <dd>Điện thoại: 0795263260</dd>
            <dd><a href="mailto='futurebrandvn@gmail.com">Email: futurebrandvn@gmail.com</a></dd>
          </dl>
        </div>
      </footer>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/common.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dot: false,
        autoplay: true,
        items: 1,
        autoplayHoverPause: true,
      })
      var owl = $('.owl-carousel');
      owl.owlCarousel();
      $('#next').click(function() {
          console.log(3);
            owl.trigger('next.owl.carousel');
        })
      var $dots = $('.owl-dot');
      function goToPrevCarouselPage() {
      var $next = $dots.filter('.active').prev();
      if (!$next.length)
          $next = $dots.first();
      $next.trigger('click');
      }
    </script>
    <?php if(!is_archive('courses') && is_page( 'enrolled-courses' )) : ?>
      <script>
        if ('loading' in HTMLImageElement.prototype) {
          const images = document.querySelectorAll('img[loading="lazy"]');
          images.forEach(img => {
            img.src = img.dataset.src;
          });
        } else {
          // Dynamically import the LazySizes library
          const script = document.createElement('script');
          script.src =
            'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
          document.body.appendChild(script);
        };
      </script>
    <?php endif; ?>
    <?php if(is_front_page()) : ?>
      <script>
        // if ('loading' in HTMLImageElement.prototype) {
        //   const images = document.querySelectorAll('img[loading="lazy"]');
        //   images.forEach(img => {
        //     img.src = img.dataset.src;
        //   });
        // } else {
        //   // Dynamically import the LazySizes library
        //   const script = document.createElement('script');
        //   script.src =
        //     'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
        //   document.body.appendChild(script);
        // };
      </script>
    <?php endif; ?>

	<?php wp_footer(); ?>
  </body>
</html>


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
            <dd><a href="#">Khóa học</a></dd>
            <dd><a href="#">Blog Brannding</a></dd>
            <dd><a href="#">Blog Marketing</a></dd>
            <dd><a href="#">Ebook</a></dd>
          </dl>
          <dl>
            <dt>Trợ giúp</dt>
            <dd><a href="#">Đăng ký tài khoản</a></dd>
            <dd><a href="#">Điều khoản sử dụng</a></dd>
            <dd><a href="#">Quyền riêng tư</a></dd>
          </dl>
          <dl>
            <dt>Liên hệ</dt>
            <dd>177 Nguyễn Thị Sáu, Thành Lộc, quận 12, thành phố Hồ Chí Minh</dd>
            <dd>Điện thoại: 0795263260</dd>
            <dd>Email: futurebrandvn@gmail.com</dd>
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
        nav: false,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
        dot: false,
        autoplay: true,
        items: 1,
        autoplayHoverPause: true,
      })

    </script>
	<?php wp_footer(); ?>
  </body>
</html>


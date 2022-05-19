<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learnpress
 */

get_header();
?>

<main class="l-main">
        <div class="l-container">
          <div class="c-banner">
            <div class="c-banner_inner">
              <div class="c-banner_big"><a class="c-banner_img" href="#"><img src="https://picsum.photos/800/478" alt="" srcset=""></a>
                <div class="c-banner_content">
                  <div class="c-banner_category">Marketing Strage</div>
                  <h3 class="c-banner_ttl">5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h3>
                  <p class="c-banner_time">MARKETING | 15 MIN READ</p>
                </div>
              </div>
              <div class="c-banner_smail">
                <div class="c-banner_btn">Marketing Strage</div>
                <ul>
                  <li><a href>
                      <h3>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h3>
                      <p>MARKETING | 15 MIN READ</p></a></li>
                  <li><a href>
                      <h3>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h3>
                      <p>MARKETING | 15 MIN READ</p></a></li>
                  <li><a href>
                      <h3>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h3>
                      <p>MARKETING | 15 MIN READ</p></a></li>
                  <li><a href>
                      <h3>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h3>
                      <p>MARKETING | 15 MIN READ</p></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="c-line">
        <div class="c-learn blog">
          <div class="l-container">
            <div class="c-learn_inner">
              <h3>New Posts</h3>
              <ul>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <p class="c-learn_category">Marketing Strage</p>
                    <h4>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h4>
                    <p class="c-learn_view">111905</p>
                  </div>
                </li>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <p class="c-learn_category">Marketing Strage</p>
                    <h4>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h4>
                    <p class="c-learn_view">111905</p>
                  </div>
                </li>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <p class="c-learn_category">Marketing Strage</p>
                    <h4>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h4>
                    <p class="c-learn_view">111905</p>
                  </div>
                </li>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <p class="c-learn_category">Marketing Strage</p>
                    <h4>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h4>
                    <p class="c-learn_view">111905</p>
                  </div>
                </li>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <p class="c-learn_category">Marketing Strage</p>
                    <h4>5 Steps to Create an Outstanding Marketing Plan [Free Templates]</h4>
                    <p class="c-learn_view">111905</p>
                  </div>
                </li>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/img03.jpg" alt=""></div>
                  <div class="c-learn_content">
                    <p class="c-learn_category">Marketing Strage</p>
                    <h4>Maketing Foundation</h4>
                    <p class="c-learn_view">111905</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </main>

<?php
//get_sidebar();
get_footer();

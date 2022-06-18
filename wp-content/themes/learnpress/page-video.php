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
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$video_list = get_posts( array(
  'post_type' => array('postvideo'),
  'post_status' => 'publish',
  'posts_per_page' => 9,
  'orderby'	=> 'post_date',
	'order'         => 'DESC',
  'paged'         => $paged
) );
get_header();?>
      <main class="l-main">
        <div class="c-learn blog blog_video">
          <div class="l-container">
            <div class="c-learn_inner" id="videoList">
              <ul>
                <?php if ( $video_list )
                { foreach ( $video_list as $item ) : setup_postdata( $item ); ?>
                <li class="c-learn_item" onclick="getVideoClick(this)" data-url="https://www.youtube.com/embed/9_V2q7C910o">
                  <div class="c-learn_img">
                  <img class="lazyload" loading="lazy" width="320" height="223"  data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($item->ID))[0] ?>" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($item->ID))[0] ?>" alt="<?php echo($item->post_title)  ?>">
                  </div>
                  <div class="c-learn_content">
                    <h4><?php echo($item->post_title)  ?></h4>
                  </div>
                </li>
              <?php
                endforeach;
                wp_reset_postdata();
                }
              ?>

              </ul>
              <div class="modal" id="myModal">
                <div class="modal-content">
                  <iframe id="youtubeID" width="100%" height="400px" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <script>
      function getVideoClick(element)
      {
         let VideoUrl = element.getAttribute("data-url");
         document.getElementById('youtubeID').src=VideoUrl;
         modal.style.display = "block";
      }
      var modal = document.getElementById("myModal");
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

<?php
//get_sidebar();
get_footer();

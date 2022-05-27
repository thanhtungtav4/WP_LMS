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
<div class="c-learn blog">
          <div class="l-container">
            <div class="c-learn_inner">
              <h3><?php echo single_cat_title('' , true ) ?></h3>
              <ul class="publication-list">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="c-learn_item">
                  <div class="c-learn_img"><img class="lazy" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?> " src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?> " alt=""></div>
                  <div class="c-learn_content">
                    <a class="tag_a" href="<?php the_permalink(); ?>">
                      <p class="c-learn_category"><?php echo get_the_category()[0]->cat_name ?></p>
                      <h4><?php the_title(); ?></h4>
                      <p class="c-learn_view"><?php print(getCrunchifyPostViews(get_the_ID())); ?></p>
                    </a>
                  </div>
                </li>
              <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
</main>

<?php
//get_sidebar();
get_footer();

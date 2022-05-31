<?php
   /**
    * The template for displaying 404 pages (not found)
    *
    * @link https://codex.wordpress.org/Creating_an_Error_404_Page
    *
    * @package learnpress
    */
   
   get_header();
   ?>
<main id="primary" class="l-main">
   <section class="error-404 not-found">
      <header class="page-header">
      </header>
      <!-- .page-header -->
      <div class="page-content">
         <section class="page_404">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 ">
                     <div class="col-sm-10 col-sm-offset-1  text-center">
                        <div class="four_zero_four_bg">
                           <h1 class="text-center ">LỖI 404</h1>
                        </div>
                        <div class="contant_box_404">
                           <h1 class="page-title">Rất tiếc, trang bạn tìm kiếm không tồn tại! </h1>
                           <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'learnpress' ); ?></p>
                           <?php
                              get_search_form();
                              ?>
                           <a href="/" class="link_404">Về Trang Chủ</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- .page-content -->
   </section>
   <!-- .error-404 -->
</main>
<!-- #main -->
<style>
   /*======================
   404 page
   =======================*/
   .page_404{ padding:40px 0; background:#fff;;
   }
   .page_404  img{ width:100%;}
   .four_zero_four_bg{
   background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
   height: 400px;
   background-position: center;
   }
   .four_zero_four_bg h1{
   font-size:80px;
   }
   .four_zero_four_bg h3{
   font-size:80px;
   }
   .link_404{			 
   color: #fff!important;
   padding: 10px 20px;
   background: #39ac31;
   margin: 20px 0;
   display: inline-block;}
   .contant_box_404{ margin-top:-50px;}
</style>
<?php
get_footer();
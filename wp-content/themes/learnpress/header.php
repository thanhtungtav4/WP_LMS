<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learnpress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<?php wp_head(); ?>
</head>
  <body>
    <div class="container">
      <header class="c-header" id="header">
        <div class="l-container">
          <div class="c-header__logo"><a class="logo-image" href="/">
              <h1>FUTURE BRAND VIETNAM</h1></a></div>
          <nav>
            <ul class="nav-menu">
              <li class="nav-menu_item is_active"><a href="#">Về Chúng Tôi</a></li>
              <li class="nav-menu_item"><a href="/courses/">Khóa Học</a></li>
              <li class="nav-menu_item"><a href="#">Blog</a></li>
              <li class="nav-menu_item"><a href="#">Ebook</a></li>
              <li class="nav-menu_item"><a href="#">Video</a></li>
              <li class="nav-menu_item"><a href="/gio-hang">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="32" height="32" fill="url(#pattern0)"></rect>
                    <defs>
                      <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_300_358" transform="scale(0.03125)"></use>
                      </pattern>
                      <image id="image0_300_358" width="32" height="32" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgEAQAAACJ4248AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAAAGAAAABgAPBrQs8AAAAHdElNRQfmBBoOCyL65/YhAAACk0lEQVRYw92XT0syURTGnzsJhjaC/dkkraIi/AASFbToA1RSRJCfIF22aOOuL1Gr2kSLgqCVEC6MbFUbK4gYaKsQpEVg3qfFdXxTZ5yxnBfe94D45+hzfue55x4Q+NeC0u+nTKUo83nKSkU98nkymaT0+70tzkiEvL2lXcibGzIS8a7zRvHnZzIep9R1Sl0nl5bIh4cGhBdOUKZSf4oPDra7Ew6rHEm5teWB/dfXCiAet4dcXVUAV1ceAJTLSlzX7QFCIQX5+upW12cv5vMB0SgwMqI+GRhQz7EYpZOsrlMuLqrXxSJQKAjt89N9t3Jykry7Y8+iUKCcmLCqJaztzuWA2VnAMMCnp1+cHCDGxoCpKSCXE2J+3kX3oRBZq6kzDwR+VRwA2d+vtGo1ylCoNa+1Ew8PA5oGFItCvL83CUlzDjoVDAS+gwvx8QGUSoCmQQwNOQPQLFKpNCcyGcAwyHDYvngwCDw+gpeXzZm6FtsbsHDADqBaVe4kEvb9r68Do6MQ1WozWV1LuAEwKdkKsL+vntNpcnq6vfvxcWB3V73Z23PrgIWNKyvq6pycNH8uBHl+bi4aMp2mnJsjZ2bInR3y5UXlLi7Ivr7m356eqtzysjOATCTUlw8O2uECAcrjY/v7fnZmtSnJw0O1RTc3W3Ptm9B2BgB1K9bWyIUFcGMDIhoFhADv74GjI6FlMtZt2c+AxSq2m4HvINkskM062tmwoFKBgMtbgGBQVXl7c13AKUwtUdfuCED7I/hx8Cd7gD0EEN3sAXMGhAcOoBuAXh6B6Abgv56Bro7AixlwN4T1u9pLB1Aud+FAqaRoY7Ge1W9o1bU7utX4A+JFJJPOANQ0cnubNIzeFTYMpalpjgB/O74AAf/YS50OSo4AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMDQtMjZUMTQ6MTE6MzQrMDA6MDBFM0ddAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIyLTA0LTI2VDE0OjExOjM0KzAwOjAwNG7/4QAAAABJRU5ErkJggg=="></image>
                    </defs>
                  </svg></a></li>
            </ul>
            <div class="nav-menu_mobile" onclick="toggleMenu()">
              <svg id="open" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6Z" fill="currentColor"></path>
                <path d="M2 12.0322C2 11.4799 2.44772 11.0322 3 11.0322H21C21.5523 11.0322 22 11.4799 22 12.0322C22 12.5845 21.5523 13.0322 21 13.0322H3C2.44772 13.0322 2 12.5845 2 12.0322Z" fill="currentColor"></path>
                <path d="M3 17.0645C2.44772 17.0645 2 17.5122 2 18.0645C2 18.6167 2.44772 19.0645 3 19.0645H21C21.5523 19.0645 22 18.6167 22 18.0645C22 17.5122 21.5523 17.0645 21 17.0645H3Z" fill="currentColor"></path>
              </svg>
              <svg id="close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z" fill="currentColor"></path>
              </svg>
            </div>
          </nav>
        </div>
      </header>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


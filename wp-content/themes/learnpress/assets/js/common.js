// /** First we get all the non-loaded image elements **/
// var lazyImages = [].slice.call(document.querySelectorAll(".lazy"));
// /** Then we set up a intersection observer watching over those images and whenever any of those becomes visible on the view then replace the placeholder image with actual one, remove the non-loaded class and then unobserve for that element **/
// let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
//     entries.forEach(function(entry) {
//         if (entry.isIntersecting) {
//             let lazyImage = entry.target;
//             lazyImage.src = lazyImage.dataset.src;
//             lazyImage.classList.remove("lazy");
//             lazyImageObserver.unobserve(lazyImage);
//         }
//     });
// });
// /** Now observe all the non-loaded images using the observer we have setup above **/
// lazyImages.forEach(function(lazyImage) {
//     lazyImageObserver.observe(lazyImage);
// });
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

function toggleMenu(){
    var menu = document.getElementsByClassName("nav-menu");
    menu[0].classList.toggle("js-active");
    var menuIcon = document.getElementsByClassName("nav-menu_mobile");
    menuIcon[0].classList.toggle("js-active");
}
function toggleCart(){
  if (window.screen.width >= 768) {
      var cartToggle = document.getElementsByClassName("m-cart");
      cartToggle[0].classList.toggle("js-active");
  }
  else{
      window.location.href = '/gio-hang';
  }
}
let currentPage = 1;
$('#load-more').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'weichie_load_more',
      paged: currentPage,
    },
    success: function (res) {
      $('.publication-list').append(res);
    }
  });
});
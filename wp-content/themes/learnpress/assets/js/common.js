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
$('#eload-more').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page
  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'eload_more',
      paged: currentPage,
    },
    success: function (res) {
      $('.ebook-list').append(res);
    }
  });
});
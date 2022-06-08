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

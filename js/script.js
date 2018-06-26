$(document).ready(function() {
  $("a.account-info__wrapper").click(function(e) {
    e.preventDefault();
    
    var $menu = $(".account-info__dropdown");
    
    /*if ($menu.hasClass("open")) {
      $menu.removeClass("open");
    } else {
      $menu.addClass("open");
    }*/
    
    $menu.toggle(200);
  })
});
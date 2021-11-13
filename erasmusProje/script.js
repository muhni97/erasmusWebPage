$(window).scroll(function(){
    $(".fadeOutScroll").css("opacity", 1 - $(window).scrollTop() / 250);
  });

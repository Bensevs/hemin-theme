jQuery(document).ready(function($){
  $('.btn').on('click', function(e){
    const ripple = $('<span class="ripple-effect"></span>');
    $(this).append(ripple);
    setTimeout(() => ripple.remove(), 600);
  });

  $(window).scroll(function() {
    $('header').toggleClass('shadow', $(this).scrollTop() > 50);
  });
});

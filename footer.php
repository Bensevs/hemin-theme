<footer class="bg-dark text-white py-4 mt-5">
  <div class="container text-center">
    <small><?php echo esc_html(get_theme_mod('hemin_theme_footer_text', '© ' . date('Y') . ' Hemin Theme')); ?></small>
    <div class="mt-2">
      <button class="btn btn-outline-light ripple">Contact Us</button>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script>
  jQuery(document).ready(function($){
    $('.ripple').on('click', function(e){
      let circle = $('<span class="ripple-effect"></span>');
      $(this).append(circle);
      let x = e.pageX - $(this).offset().left;
      let y = e.pageY - $(this).offset().top;
      circle.css({ top: y+'px', left: x+'px' });
      setTimeout(() => circle.remove(), 600);
    });

    $('.fade-in-card').each(function(i){
      $(this).delay(i * 200).fadeIn(600);
    });
  });
</script>
<style>
  .ripple-effect {
    width: 100px;
    height: 100px;
    position: absolute;
    background: rgba(255,255,255,0.4);
    border-radius: 50%;
    transform: scale(0);
    animation: ripple-animation 0.6s linear;
    pointer-events: none;
  }
  @keyframes ripple-animation {
    to { transform: scale(4); opacity: 0; }
  }
  .fade-in-card { display: none; }

  jQuery(document).ready(function($){
  $('.ripple').on('click', function(e){
    let circle = $('<span class="ripple-effect"></span>');
    $(this).append(circle);
    let x = e.pageX - $(this).offset().left;
    let y = e.pageY - $(this).offset().top;
    circle.css({ top: y+'px', left: x+'px' });
    setTimeout(() => circle.remove(), 600);
  });
});

</style>
<script >
  jQuery(document).ready(function($){
  $('.ripple').on('click', function(e){
    let circle = $('<span class="ripple-effect"></span>');
    $(this).append(circle);
    let x = e.pageX - $(this).offset().left;
    let y = e.pageY - $(this).offset().top;
    circle.css({ top: y+'px', left: x+'px' });
    setTimeout(() => circle.remove(), 600);
  });
});
 </script>
</body>
</html>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>
    <?php
      wp_nav_menu([
        'theme_location' => 'main_menu',
        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
        'container' => false
      ]);
    ?>
  </div>
</nav>
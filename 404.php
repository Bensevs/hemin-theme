<?php get_header(); ?>

<section class="vh-100 d-flex flex-column justify-content-center align-items-center bg-light text-center">
  <div class="container">
    <h1 class="display-1 fw-bold text-danger animate__animated animate__shakeX">404</h1>
    <h2 class="mb-4 animate__animated animate__fadeInDown">Oops! Page Not Found</h2>
    <p class="mb-4 fs-5 animate__animated animate__fadeInUp">Sorry, the page you are looking for doesn't exist or has been moved.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg ripple animate__animated animate__fadeInUp">
      ← Back to Home
    </a>
  </div>
</section>

<?php get_footer(); ?>

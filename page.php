<?php get_header(); ?>

<section class="py-5 bg-light">
  <div class="container">
    <article class="mx-auto animate__animated animate__fadeInUp" style="max-width: 900px;">
      <header class="mb-4">
        <h1 class="display-4"><?php the_title(); ?></h1>
        <hr class="border-primary border-2 opacity-75">
      </header>

      <div class="content fs-5 lh-lg">
        <?php
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        ?>
      </div>

      <footer class="mt-5">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-outline-primary ripple">
          ← Back to Home
        </a>
      </footer>
    </article>
  </div>
</section>

<?php get_footer(); ?>

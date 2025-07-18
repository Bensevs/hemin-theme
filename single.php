<?php get_header(); ?>
<main class="container my-5">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="mb-5">
      <h1 class="mb-3"><?php the_title(); ?></h1>
      <div class="mb-4 text-muted small">
        <?php the_date(); ?> | <?php the_author(); ?>
      </div>
      <div>
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
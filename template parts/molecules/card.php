<article class="card mb-4 shadow-sm">
  <?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>" loading="lazy">
  <?php endif; ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>
    <?php get_template_part('template-parts/atoms/button'); ?>
  </div>
</article>
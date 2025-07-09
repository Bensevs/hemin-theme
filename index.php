<?php get_header(); ?>

<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h1 class="display-4 animate__animated animate__fadeInDown">Welcome to Hemin Theme</h1>
    <p class="lead animate__animated animate__fadeInUp">Modern, Responsive, and Fast WordPress Theme</p>
    <a href="#posts" class="btn btn-light mt-3">Explore Posts</a>
  </div>
</section>

<section class="py-5">
  <div class="container">

    <!-- لینک شیک به صفحه Sample Page -->
    <?php 
      $sample_page = get_page_by_path('sample-page'); // 'sample-page' نامک صفحه است
      if ($sample_page) :
    ?>
    <div class="mb-5 text-center">
      <a href="<?php echo get_permalink($sample_page->ID); ?>" class="btn btn-outline-primary btn-lg shadow ripple">
        Go to Sample Page &rarr;
      </a>
    </div>
    <?php endif; ?>

    <!-- نمایش نوشته‌ها -->
    <div class="row g-4">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm fade-in-card">
            <?php if ( has_post_thumbnail() ) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top lazy" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>

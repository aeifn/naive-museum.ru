<div class="container mt-2">
  <div class="row">
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
      <!-- Плитка -->
      <div class="row ">
        <?php while (have_posts()): ?>
          <div class="col-lg-6 d-flex">
            <?php the_post();
            get_template_part('template-parts/card');
            ?>
          </div>
        <?php endwhile ?>
      </div>
    </div>
  </div>
</div>

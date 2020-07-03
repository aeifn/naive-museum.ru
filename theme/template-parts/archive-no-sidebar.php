<main class="container mt-4">
  <div class="row">
    <div class="row ">
      <?php while (have_posts()): ?>
        <div class="col-md-4 d-flex">
          <?php the_post();
          get_template_part('template-parts/card');
          ?>
        </div>
      <?php endwhile ?>
      <?php the_posts_pagination(); ?>
    </div>
  </div>
</main>

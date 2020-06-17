<?php get_header() ; ?>
<?php get_template_part ( 'template-parts/entry-header' ); ?>
  <div class="container">



    <div class="row">

      <div class="col-md-4">
        <?php get_template_part( 'template-parts/sidebar' ); ?>
      </div>

      <div class="col-md-8">

        <!-- Меню подразделения -->
        <div class="row">
          <div class="col-12">
          <?php get_template_part( 'template-parts/submenu' ); ?>
          </div>
        </div>

        <!-- Плитка -->
        <div class="row">
          <?php while ( have_posts() ): ?>
            <div class="col-md-6 d-flex mt-3">
              <?php the_post();
              get_template_part( 'template-parts/card' );
              ?>
            </div>
          <?php endwhile ?>
        </div>

      </div>
    </div>

  </div>
<?php get_footer(); ?>

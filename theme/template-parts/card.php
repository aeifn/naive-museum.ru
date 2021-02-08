<div class="card d-flex">

<div class="badges d-block">
<?php the_tags('',''); ?>
</div>
<a href="<?php esc_url( the_permalink() ); ?>" class="card-content bg-dark text-white d-flex">
  <?php the_post_thumbnail( 'medium_large', array ( 'class' => 'card-img' ) ); ?>
  <!--<img class="card-img" src="<?= get_template_directory_uri() . '/img/04.jpg' ?>" alt="">-->
  <div class="card-img-overlay">
    <h1 class="card-title"><?= the_title(); ?></h1>
    <p class="card-text date"><?= get_post_custom_values('date', get_the_ID() )[0]; ?></p>
    <p class="card-text description">
      <?= the_excerpt(); ?>
    </p>
  </div>
</a>

<?php get_template_part('template-parts/tickets-btn'); ?>

</div>

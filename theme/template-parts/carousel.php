<?php

$posts= get_posts();
?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">


    <ol class="carousel-indicators">
<?php foreach($posts as $key=>$post) { ?>
        <li data-target="#carouselExampleCaptions" data-slide-to="<?=$key?>" <?php if($key==0): ?>class="active"<?php endif ?>></li>
<?php } ?>
    </ol>

    <div class="carousel-inner">
<?php foreach($posts as $key=>$post): setup_postdata($post); ?>
      <div class="carousel-item <?php if($key==0) echo 'active' ?>">
        <?php the_post_thumbnail( 'medium_large', array ( 'class' => 'd-block w-100 carousel-image' ) ); ?>
        <div class="carousel-caption d-none d-md-block">
          <h1><?= the_title() ?></h1>
          <p><?= the_excerpt(); ?></p>
        </div>
      </div>
<?php endforeach ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>

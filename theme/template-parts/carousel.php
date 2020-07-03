<?php
$posts= mrlini_get_carousel_posts();
?>


<div id="carousel" class="carousel slide container" data-ride="carousel">


    <ol class="carousel-indicators">
<?php foreach($posts as $key=>$post) { ?>
        <li data-target="#carousel" data-slide-to="<?=$key?>" <?php if($key==0): ?>class="active"<?php endif ?>></li>
<?php } ?>
    </ol>

    <div class="carousel-inner">
<?php foreach($posts as $key=>$post): setup_postdata($post); ?>
      <div class="carousel-item <?php if($key==0) echo 'active' ?>">
        <a href="<?=the_permalink()?>">
        <?php the_post_thumbnail( 'medium_large', array ( 'class' => 'd-block w-100 carousel-image' ) ); ?>
        </a>
        <div href="<?= the_permalink(); ?>" class="carousel-caption d-none d-md-block">
          <a href="<?=the_permalink()?>"><h1><?= the_title(); ?></h1></a>
          <?= the_category();  ?>
          <p><?= get_post_custom_values('date', get_the_ID() )[0]; ?></p>
          <a class="no-underline" href="<?=the_permalink()?>"<?= the_excerpt(); ?></a>
        </div>
      </div>
<?php endforeach ?>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Предыдущий</span>
    </a>

    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Следующий</span>
    </a>

</div>

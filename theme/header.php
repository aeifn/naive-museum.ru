<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <script src="/wp-content/themes/mrlini/dist/main.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php
  wp_body_open();
  ?>

  <header class="container">
	<div class="row">
		<div class="col-md-6">
		<div><a href="http://mos.ru/kultura"><img src="/wp-content/themes/mrlini/img/depcult.png"></a></div>
		<div><a href="/"><img src="/wp-content/themes/mrlini/img/logo.png" class="img-fluid" alt="Responsive image"></a></div>
		</div>
		<div class="col-md-6">
			<!-- Служебные ссылки -->
			<div class="row">
			<div class="col-md-6"><a href="#">Summary</a></div>
			<div class="col-md-6 d-none d-md-block"><a href="#">Версия для слабовидящих</a></div>
			</div>
			<!-- Поиск -->
			<div class="row">
			SEARCH
			</div>
			<!-- Социальные сети -->
			<div class="row">
			SOCIAL
			</div>

		</div>
	</div>


  </header>

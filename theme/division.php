  <div class="container">

    <div class="row text-center">
      <h1 class="mx-auto">Музей</h1>
    </div>

    <div class="row">

      <div class="col-md-4">
        <?php include 'inc/_sidebar.php' ?>
      </div>

      <div class="col-md-8">

        <!-- Меню подразделения -->
        <div class="row">
          <div class="col-12">
          <?php include 'inc/_submenu.php' ?>
          </div>
        </div>

        <!-- Плитка -->
        <div class="row">

          <?php foreach (range(0,3) as $number): ?>
          <div class="col-md-6">
            <?php include 'inc/_tile.php' ?>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </div>

  </div>

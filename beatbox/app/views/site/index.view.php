
  <!-- ///////////////////////CORPO DA HOME///////////////////////// -->
  <div class="content">
    <div class="title">

      <div class="img-logo">
        <img src="../public/img/beatbox-logo-recorte.png" alt="Logotipo">
      </div>

      <div class="img-logo-responsivo">
        <h1>Venha conhecer nossos produtos!</h1>
      </div>
      <!-- ///////////////////////CARROUSEL HOME///////////////////////// -->
      <div id="carousel-home" class="carousel slide slide_home" data-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="carousel_img" src="../public/img/bea-home-1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="carousel_img" src="../public/img/bea-home-2.jpeg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class=" carousel_img" src="../public/img/bea-home-3.jpg" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>

    <!-- ///////////////////////PAINEL DE PRODUTOS EM DESTAQUE///////////////////////// -->
    <div class="container-lg spot-products">
      <?php $i=0; ?>
    <?php foreach ($produtos as $produto) : ?>
      <?php if ($i<=3) :?>
      <div class="product">
        <div class="card">
          <img src="../public/img/<?= $produto->img ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3><?= $produto->nome ?></h3>R$<?= $produto->preco ?></p>
          </div>
        </div>
      </div>
      <?php $i++; ?>
      <?php endif ?>
      <?php endforeach ?>
      <!-- <div class="product">
        <div class="card">
          <img src="../public/img/Gibson-Flying-V.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Guitarra Flying V</h3>Preço: 500.000</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="card">
          <img src="../public/img/bateria-odery.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Bateria ODERY</h3>Preço: 500.000</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="card" style="width: 18rem;">
          <img src="../public/img/amp.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Amp Roland</h3>Preço: 500.000</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script> -->


  <?php require 'app/views/site/partials/footer.php'; ?>

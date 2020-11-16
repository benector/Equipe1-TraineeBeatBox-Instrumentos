<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/css/styles-home.css">
  <link rel="stylesheet" href="/public/css/styles_nav_footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

  <title>BeatBox Instrumentos</title>
</head>

<body>
  <!-- ///////////////////////NAVBAR///////////////////////// -->
  <nav class="navbar navbar-expand-lg navbar-light cinza-quase-branco">
    <a class="navbar-brand" href="#">
      <img src="./img/beatbox-logo-cropped.png" width="30" height="30" alt="Logo" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./View_Produtos.html">Produtos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./QuemSomos.html">Quem Somos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contato <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- ///////////////////////CORPO DA HOME///////////////////////// -->
  <div class="content">
    <div class="title">

      <div class="img-logo">
        <img src="img/beatbox-logo-recorte.png" alt="Logotipo">
      </div>

      <div class="img-logo-responsivo">
        <h1>Venha conhecer nossos produtos!</h1>
      </div>
      <!-- ///////////////////////CARROUSEL HOME///////////////////////// -->
      <div id="carousel-home" class="carousel slide slide_home" data-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="carousel_img" src="img/bea-home-1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="carousel_img" src="img/bea-home-2.jpeg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class=" carousel_img" src="img/bea-home-3.jpg" alt="Terceiro Slide">
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
      <div class="product">
        <div class="card">
          <img src="img/violino.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Violino Clássico</h3>Preço: 500.000</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="card">
          <img src="img/Gibson-Flying-V.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Guitarra Flying V</h3>Preço: 500.000</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="card">
          <img src="img/bateria-odery.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Bateria ODERY</h3>Preço: 500.000</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="card" style="width: 18rem;">
          <img src="img/amp.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            <h3>Amp Roland</h3>Preço: 500.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/seus-scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
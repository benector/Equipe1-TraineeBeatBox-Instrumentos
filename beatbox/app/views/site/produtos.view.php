<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <script src="https://kit.fontawesome.com/736c040bb4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../public/css/styles.css">
	<link rel="stylesheet" href="../public/css/styles-produtos.css">
 
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <title>Beatbox - Produtos</title>

</head> -->

<!-- <body> -->
    <div class = "main">
    <div class="painel_geral">
      <h1>Nossos Produtos</h1>
    </div>
    
      
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Busque seu produto" aria-label="Busque seu produto" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
          
        </div>
        
        

      </div>
      
    
    <div class="filtros-res">
      <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Ordenar
        </button>
        <div class="dropdown-menu">
          ...
        </div>
      </div>
      
      <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Categoria
        </button>
        <div class="dropdown-menu">
          ...
        </div>

      </div>




    </div>
    <div class="painel_produtos">

      <div class="filtros">
        <h4>Ordenar</h4>
        <div class="card-lista">
          <ul class="list-group">
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Cras justo
              odio</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Dapibus ac
              facilisis in</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Vestibulum at
              eros</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Vestibulum at
              eros</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Vestibulum at
              eros</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Vestibulum at
              eros</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Vestibulum at
              eros</li>
          </ul>
        </div>
        
        <h4>Categoria</h4>
        <div class="card-lista">
          <ul class="list-group">
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck2">Cras justo
              odio</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Dapibus ac
              facilisis in</li>
            <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck1">Vestibulum at
              eros</li>
          </ul>
        </div>
      </div>
      <div class="lista-produtos">
      <?php foreach ($produtos as $produto) : ?>
        <a class="produto-direcao" href="#">
          <div class="card">
            <img class="card-img-top" src="../public/img/guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg"
              alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title"><?= $produto->nome ?></h5>
              <p class="card-text-preco"><b>R$ <?= $produto->preco ?></p>
              <p class="card-text"><?= $produto->quantidade ?> Disponíveis</p>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
        
        
        

        
      </div>
    </div>
  
    <div class="paginacao">
      <nav aria-label="Navegação de página exemplo">
        <ul class="pagination justify-content-center ">
          <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="View_Produtos.html">1</a></li>
          <li class="page-item"><a class="page-link" href="View_Produtos - 2.html">2</a></li>
          <li class="page-item"><a class="page-link" href="View_Produtos - 3.html">3</a></li>
          <li class="page-item"><a class="page-link" href="View_Produtos - 2.html">Próximo</a>
          </li>
        </ul>
      </nav>
    </div>
    </div>
  
  

   
</body>

</html>
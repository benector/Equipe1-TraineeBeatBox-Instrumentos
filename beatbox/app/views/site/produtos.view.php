<body>

  <form class="main" action="/filtro" method="POST">
    <div class="painel_geral">
      <h1>Nossos Produtos</h1>
    </div>

      <div class="input-group mb-3">
        <input type="text" name="busca" class="form-control" <?php if (isset($_POST['busca'])) : ?> placeholder=" Exibindo resultados para <?= $_POST['busca'] ?>" value="<?= $_POST['busca']?>" <?php endif; ?> <?php if (!isset($_POST['busca'])) : ?> placeholder="Procure aqui algum produto..." <?php endif; ?> aria-label="Busque seu produto" aria-describedby="button-addon2">


        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pesquisar</button>
        </div>
      </div>
   

    <div class="filtros-res">
      <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </button>
        <div class="dropdown-menu">
          <ul class="list-group">
            <?php foreach ($categorias as $categoria) : ?>
              <li class="list-group-item"><input type="checkbox" class="form-check-input" id="exampleCheck2" value="<?= $categoria->categoria ?>"></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="painel_produtos">

      <div class="filtros">
        
          <button class="filtro btn btn-outline-secondary" type="submit" id="button-addon2">Filtrar</button>
          <h4>Categoria</h4>
          <div class="card-lista">
            <ul class="list-group">
              <?php foreach ($categorias as $categoria) : ?>
                <li class="list-group-item">
                  <input type="checkbox" name="criterio[]" class="form-check-input" id="exampleCheck2" value=<?= $categoria->categoria ?>><?= $categoria->categoria ?></input>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        
      </div>

      <div class="lista-produtos">

        <?php foreach ($produtos as $produto) : ?>
          <div class="modal fade" id="vizualizar<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalLongoExemplo">
                    Vizualização
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <div class="produto">
                    <div class="img-produto">
                      <img src="../public/img/<?= $produto->img ?>">
                    </div>
                    <div class="conteudo-produto">
                      <div class="align-middle">
                        <h1>
                          <?= $produto->nome ?>
                        </h1>
                        <h3 class="preco-viz">Por apenas <span class="preco-valor">R$
                            <?= $produto->preco ?> </span>
                        </h3>
                        <h3 class="h3-categoria">Categoria:
                          <?= $produto->categoria ?>
                        </h3>
                        <h3 class="h3-other"> <b>Estoque Disponível</b> </h3>
                        <h3 class="h3-other">Quantidade: <?= $produto->quantidade ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="descricao">
                    <?= nl2br($produto->descricao, false) ?>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Fechar
                  </button>
                </div>
              </div>
            </div>
          </div>
          <a class="produto-direcao" href="#" data-toggle="modal" data-target="#vizualizar<?= $produto->id ?>">
            <div class="card">
              <img class="card-img-top" src="../public/img/<?= $produto->img ?>" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <?= $produto->nome ?>
                </h5>
                <p class="card-text-preco"><b>R$
                    <?= $produto->preco ?></b></p>
                <p class="card-text">
                  <?= $produto->quantidade ?> Disponíveis</p>
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
        </form>
</body>

</html>
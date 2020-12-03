<body>  
  
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
      <?php

use App\Controllers\Pagination;

foreach ($produtos as $produto) : ?> 
        <div class="modal fade" id="vizualizar<?=$produto->id?>" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">
                            Vizualizar
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="viz">
                                <img class="img-viz" src="../public/img/<?= $produto->img?>" alt="Produto"
                                    title="Produto">
                            </div>
                            <div class="form-group">
                                <label for="nome">Nome do produto: </label>
                                <input type="text" class="form-control" id="nome" placeholder="<?= $produto->nome ?>"
                                    readonly>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="exampleFormControlSelect1">Categoria</label>
                                    <select class="form-control" id="exampleFormControlSelect1" readonly>
                                        <option><?= $produto->categoria ?></option>

                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput2">Quantidade</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="<?= $produto->quantidade ?>" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput2">Preço</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="<?= $produto->preco ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Descrição do Produto</label>
                                <textarea class="form-control" placeholder="<?= $produto->descricao ?>"
                                    id="exampleFormControlTextarea1" rows="3" readonly></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fechar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <a class="produto-direcao" href="#" data-toggle="modal" data-target="#vizualizar<?=$produto->id?>">
          <div class="card">
            <img class="card-img-top" src="../public/img/<?= $produto->img?>"
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
  
       
      <?= $pagination->createLinks(); ?> 
    </div>

   
    <?php require 'app/views/site/partials/footer.php'; ?>
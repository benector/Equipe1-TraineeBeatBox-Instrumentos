<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/736c040bb4.js" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/styles-produto.css">
    <link rel="stylesheet" href="../public/css/styles_nav_footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Beatbox</title>
</head>

<body>
    <div class="main">
        <div class="painel_geral">
            <h1>Nossos Produtos</h1>
        </div>
        <div class="pesquisa">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Busque seu produto" aria-label="Busque seu produto"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
                </div>
            </div>
        </div>
        <div class="produto">
            <div class="img-produto">
                <img src="img/guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg">
            </div>
            <div class="conteudo-produto">
                <div class="align-middle">
                    <h1>Guitarra Tagima</h1>
                    <!-- <p class = "descricao-curta">A MG30 é nova Stratocaster da linha de entrada da Tagima, indicada para iniciantes que procuram
                        um instrumento com ótima sonoridade , acabamento e com a versatilidade deste modelo clássico
                        criado pela Fender nos anos 50. Destaque para o acabamento fosco do corpo. </p> -->
                    <h3 class = "preco">Por apenas <span class = "preco-valor">R$ <?= $produtos[0]->preco ?> </span></h3>
                    <h3 class = "h3-other">Categoria: <?= $produtos[0]->categoria ?> </h3>
                    <h3 class = "h3-other"> <b>Estoque Disponível</b> </h3>
                    <h3 class = "h3-other">Quantidade: <?= $produtos[0]->quantidade ?>  </h3>
                </div>
            </div>
        </div>
        <div class="descricao">
        <?= nl2br($produtos[0]->descricao, false)?> 
            
        </div>
    </div>
</body>


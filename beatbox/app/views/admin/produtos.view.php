
<body>
    <div class="main">
        <div class="painel_geral">
            <h1>Produtos</h1>
        </div>
        <div class="adicionar">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionar">
                Adicionar Produto
            </button>
        </div>
        <div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true" action="/produtos/create" method="POST">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalLongoExemplo">
                                Adicionar
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/adm/produto/create" method="POST">
                                <div class="form-group">
                                    <label>Nome do produto: </label>
                                    <input name="nome" type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Insira o nome do produto" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="Categoria">Categoria</label>
                                        <select class="form-control" name="categoria" id="categoria" required>
                                            <option>Selecione uma Categoria</option>
                                            <?php foreach ($categorias as $categoria) : ?>
                                            <option><?=$categoria->categoria?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="quantidade">Quantidade</label>
                                        <input type="text" name="quantidade" class="form-control" id="quantidade"
                                            placeholder="Insira a Quantidade" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="preço">Preço</label>
                                        <input name="preco" type="text" class="form-control" id="preco"
                                            placeholder="Insira o preço" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Descricao">Descrição do Produto</label>
                                    <textarea name="descricao" class="form-control" id="descricao" rows="3"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Insira uma imagem</label>
                                    <input name="img" type="file" class="form-control-file" id="img" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="coluna-1">Editar</th>
                    <th scope="col" class="coluna-2">#</th>
                    <th scope="col" class="coluna-3">Produto:</th>
                    <th scope="col" class="coluna-4-qtd">Qtd</th>
                    <th scope="col" class="coluna-5">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <th scope="row">
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal"
                            data-target="#editar<?=$produto->id?>">
                            <img class="min" src="../public/img/write_edit_icon.png" alt="Editar" title="Editar" />
                        </button>
                    </th>
                    <td><?= $produto->id ?></td>
                    <td data-toggle="modal" data-target="#vizualizar<?=$produto->id?>"><?= $produto->nome ?>
                    </td>
                    <td class="coluna-4-qtd"><?= $produto->quantidade ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal"
                            data-target="#excluir<?=$produto->id?>">
                            <img class="min" src="../public/img/x-icon.png" alt="Excluir" title="Excluir">
                        </button>
                    </td>
                </tr>
                <div class="modal fade" id="editar<?=$produto->id?>" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalLongoExemplo">
                                        Editar
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/adm/produto/update">
                                        <input type="hidden" value="<?= $produto->id ?>" name="id">
                                    
                                        <div class="form-group">
                                            <label for="nome">Nome do produto: </label>
                                            <input type="text" name="nome" class="form-control"
                                                id="formGroupExampleInput" value="<?= $produto->nome ?>" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="exampleFormControlSelect1">Categoria</label>
                                                <select name="categoria" class="form-control" id="categoria" required>
                                                    <option><?=$produto->categoria?></option>
                                                    <?php foreach ($categorias as $categoria) : ?>
                                                    <option><?=$categoria->categoria?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="quantidade">Quantidade</label>
                                                <input name="quantidade" type="text" class="form-control"
                                                    id="quantidade" value="<?= $produto->quantidade ?>" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="preço">Preço</label>
                                                <input name="preco" type="text" class="form-control" id="preço"
                                                    value="<?= $produto->preco ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="descrição">Descrição do
                                                Produto</label>
                                            <textarea name="descricao" class="form-control" id="descrição" rows="3"
                                                required><?= $produto->descricao ?></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="imagem">Trocar a imagem</label>
                                            <input name="img" type="file" class="form-control-file" id="img">                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Fechar
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                Salvar mudanças
                                            </button>
                                            
                                        </div>
                                </form>
                                
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
    </div>
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
    <div class="modal fade" id="excluir<?=$produto->id?>" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalLongoExemplo">Excluir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Tem certeza que deseja excluir o item selecionado ?</h4>
                </div>
                <form action="/adm/produto/delete" method="POST">
                    <div class="modal-footer">
                        <input type="hidden" value="<?= $produto->id ?>" name="id">
                        <button type="submit" class="btn btn-secondary">Excluir e Salvar
                            mudanças</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    </tbody>
    </table>
        <?= $pagination->createLinks() ?>
    </div>
    </div>
    </main>
</body>

</html>
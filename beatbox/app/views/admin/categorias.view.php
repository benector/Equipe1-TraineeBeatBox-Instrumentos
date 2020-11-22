

<body>
        <div class="main">
        <!-- ///////////Título da página///////////// -->
        <div class="painel_geral">
            <h1>Categorias</h1>
        </div>

        <!-- ///////////Botão para adicionar///////////// -->
        <div class="adicionar">
            <button class="btn btn-primary" data-toggle="modal" data-target="#adicionar">
                Adicionar Categoria
            </button>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="coluna-1">Editar</th>
                    <th scope="col" class="coluna-2">#</th>
                    <th scope="col" class="coluna-3">Categoria:</th>
                    <th scope="col" class="coluna-4 col-email">Qtd</th>
                    <th scope="col" class="coluna-5">Excluir</th>
                </tr>
            </thead>
            <tbody>
                
                    <?php foreach ($categorias as $categoria) : ?>
                    
                        <tr>
                            <td scope="row">
                                <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#editar<?= $categoria->id ?>">
                                    <img class="min" src="../public/img/write_edit_icon.png" alt="Editar" title="Editar" />
                                </button>
                            </td>
                            <td> <?= $categoria->id ?> </td>
                            <td data-toggle="modal" data-target="#listar<?= $categoria->id ?>"><?= $categoria->categoria ?></td>
                            <td class="col-email"><?= $categoria->quantidade ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#excluir<?= $categoria->id ?>">
                                    <img class="min" src="../public/img/x-icon.png" alt="Excluir" title="Excluir" />
                                </button>
                            </td>
                        </tr>
                    
                    <div class="modal fade" id="editar<?= $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                            <form action="/adm/categorias/edit" method="POST">
                                <input type="hidden" value="<?= $categoria->id ?>" name="id"/>
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
                                        
                                            <div class="form-group">
                                                <label for="nome-categoria">Nome da Categoria: </label>
                                                <input value = "<?= $categoria->categoria?>" name="categoria" type="text" class="form-control" id="categoria-nome-edt"
                                                required/>
                                            </div>
                                            <div class="form-row">
                                                <!-- <div class="form-group col-md-6">
                                                    <div class="prodlist">
                                                        <select class="form-control" name="">
                                                            <?php foreach ($produtos as $produto) : ?>
                                                                <option>
                                                                    <?= $produto->nome ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                <div class="form-group col-md-6">
                                                    <label for="formGroupExampleInput2">Quantidade</label>
                                                    <input value = "<?= $categoria->quantidade?>" name="quantidade" type="text" class="form-control" id="formGroupExampleInput2"
                                                    required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Descrição da Categoria</label>
                                                <textarea value = "<?= $categoria->descrição?>" type="text" name= "descrição" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Fechar
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            Salvar mudanças
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="excluir<?= $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
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
                                <div class="modal-footer">
                                    <form action="/adm/categorias/delete" method="POST">
                                        <input type="hidden" name="id" value="<?= $categoria->id ?>">
                                        <button type="submit" class="btn btn-secondary">
                                            Excluir e Salvar mudanças
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                                       Não
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="listar<?= $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalLongoExemplo">Produtos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label>Produtos</label>
                                    <div class="prodlist">
                                        <?php foreach ($produtos as $produto) : ?>
                                            <?php if($produto->categoria === $categoria->categoria) : ?>
                                                <p>
                                                    <?= $produto->nome ?>
                                                </p>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descrição da Categoria:</label>
                                        <textarea type="text" name= "descrição" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?= $categoria->descrição?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                                        Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">Adicionar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/adm/categorias/create" method="POST">
                            <div class="form-group">
                                <label for="nome-categoria">Nome da Categoria: </label>
                                <input type="text" name="categoria" class="form-control" placeholder="Insira o nome da Categoria" required/>
                            </div>
                            <div class="form-row">
                                <!-- <div class="form-group col-md-6">
                                    <div class="prodlist">
                                        <form action="/adm/categoria/" method="POST">
                                            <input type="checkbox" id="prod1" name="prod1">
                                            <label for="vehicle1"> Guitarra Flying V</label><br>
                                            <input type="checkbox" id="prod2" name="prod2">
                                            <label for="vehicle2"> Bateria batmuito</label><br>
                                            <input type="checkbox" id="prod3" name="prod3">
                                            <label for="vehicle3"> Amplificador Ampere</label><br>
                                            <input type="checkbox" id="prod4" name="prod4">
                                            <label for="vehicle1"> Guitarra Flying V</label><br>
                                            <input type="checkbox" id="prod5" name="prod5">
                                            <label for="vehicle2"> Bateria batmuito</label><br>
                                            <input type="checkbox" id="prod6" name="prod6">
                                            <label for="vehicle3"> Amplificador Ampere</label><br>
                                        </form>
                                    </div>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput2">Quantidade</label>
                                    <input type="text" name="quantidade" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Insira a Quantidade" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrição da Categoria</label>
                                <textarea class="form-control" name="descrição" id="exampleFormControlTextarea1" rows="3"></textarea>
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

        <div class="paginacao ">
            <nav>
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
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js%22%3E"></script>-->
    <script src="https://kit.fontawesome.com/736c040bb4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/public/css/styles-adm.css"/>
    <link rel="stylesheet" href="/public/css/styles.css" >

    <script src="/public/js/mostrarSenha.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <title>Beatbox ADM - Usuários</title>

</head>

<body>
    <div class="main">
        <!-- ///////////Título da página///////////// -->
        <div class="painel_geral">
            <h1>Usuários</h1>
        </div>

        <!-- ///////////Botão para adicionar///////////// -->
        <div class="adicionar">
            <button class="btn btn-primary" data-toggle="modal" data-target="#adicionar">
                Cadastrar Usuário
            </button>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="coluna-1">Editar</th>
                    <th scope="col" class="coluna-2">#</th>
                    <th scope="col" class="coluna-3-usuarios">Nome:</th>
                    <th scope="col" class="coluna-4-usuarios col-email">E-mail:</th>
                    <th scope="col" class="coluna-5">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php $contador = 0; ?>
                <?php foreach($users as $user): ?>

                    
                    
                    <tr>
                        <td scope="row">
                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal"
                                data-target="#editar<?=$user->id?>">
                                <img class="min" src="/public/img/write_edit_icon.png" alt="Editar" title="Editar" />
                            </button>
                        </td>
                        <td><?= $user->id ?></td>
                        <td data-toggle="modal" data-target="#listar<?=$user->id?>"><?= $user->name ?></td>
                        <td class="col-email"><?= $user->email ?></td>
                        <td> 
                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal"
                                data-target="#excluir<?=$user->id?>">
                                <img class="min" src="/public/img/x-icon.png" alt="Excluir" title="Excluir" />
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="editar<?=$user->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalLongoExemplo">
                                        Editar Usuário
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/adm/usuarios/update">
                                        <input type="hidden" value="<?= $user->id ?>" name="id"/>
                                        <div class="form-group">
                                            <label for="nome-user">Nome: </label>
                                            <input type="text" class="form-control" name="name"
                                                value="<?= $user->name ?>" required/>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="user-email">E-mail:</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="<?= $user->email ?>" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="user-password">Senha:</label>
                                                <div class="senha-e-olho">
                                                <input type="password" class="form-control input-senha" name="password" id="a<?= $user->id ?>"
                                                    value="<?= $user->password ?>" required/>
                                                <!-- SHOW PASSWORD -->
                                                <span id="1olho<?= $user->id ?>" toggle="#password-field" class="far fa-fw fa-eye-slash field_icon" onclick="togglePassword2('a<?= $user->id ?>', '1olho<?= $user->id ?>')"></span>
                                                </div>
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
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="modal fade" id="excluir<?=$user->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                                    <h4>Tem certeza que deseja excluir o usuário selecionado?</h4>
                                </div>
                                <form action="/adm/usuarios/delete" method="POST">
                                <div class="modal-footer">
                                    <input type="hidden" value="<?= $user->id ?>" name="id"/>
                                    <button type="submit" class="btn btn-secondary">Excluir e Salvar mudanças</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="listar<?=$user->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalLongoExemplo">
                                        Usuário
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="nome-user">Nome: </label>
                                            <input type="text" class="form-control"
                                                value="<?= $user->name ?>" readonly/>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="user-email">E-mail:</label>
                                                <input type="email" class="form-control"
                                                    value="<?= $user->email ?>" readonly/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="user-password">Senha:</label>
                                                <div class="senha-e-olho">
                                                <input type="password" class="form-control input-senha" name="password" id="b<?= $user->id ?>"
                                                    value="<?= $user->password ?>" readonly/>
                                                    <!-- SHOW PASSWORD -->
                                                    <span id="2olho<?= $user->id ?>" toggle="#password-field" class="far fa-fw fa-eye-slash field_icon" onclick="togglePassword2('b<?= $user->id ?>', '2olho<?= $user->id ?>')"></span>
                                                </div>
                                            </div>
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
            <?php endforeach; ?>

            <div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalLongoExemplo">
                                        Cadastrar Usuário
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/adm/usuarios/create"  method="POST">
                                        <div class="form-group">
                                            <label for="nome-user">Nome: </label>
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Insira o nome do usuário" required />
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="user-email">E-mail:</label>
                                                <input name="email" type="email" class="form-control"
                                                    placeholder="example@e-mail.com" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="user-password">Senha:</label>
                                                <input name="password" type="password" class="form-control" id="password-new"
                                                    placeholder="******" required/>
                                            </div>
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
        </tbody>
    </table>
    <div class="paginacao ">
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
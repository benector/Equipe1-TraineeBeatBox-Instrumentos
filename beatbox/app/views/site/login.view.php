<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../public/css/styles_nav_footer.css">
    <link rel="stylesheet" href="./public/css/styles_login.css">

    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/736c040bb4.js" crossorigin="anonymous"></script>

    <script src="/public/js/mostrarSenha.js"></script>

    <title>Login</title>
  </head>
  <body id="pagina" class="text-center">
    <?php require "app/views/site/partials/navbar.php"; ?>

    <form action="/app/login.php" method="POST" class="form-signin">
        <div class="img-container">
          <img class="mb-4" src="/public/img/beatbox-logo-cropped.png" alt="">
        </div>

        <?php
          if(isset($_SESSION['autentication-failed'])):
        ?>
        <div class="alert alert-danger" role="alert">
          Erro: Usuário ou senha inválidos.
        </div>
        <?php
          endif;
          unset($_SESSION['autentication-failed']);
        ?>

        <h1 class="h3 mb-3 font-weight-normal">Faça seu login</h1>
        <label for="inputEmail" class="sr-only">Endereço de email</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" autofocus">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Senha">
        <div class="checkbox mb-3">
        <label class="botoes-check">
          <input type="checkbox" value="show-password" onclick="mostrarSenha()"> Mostrar senha
        </label>
        <!--<label class="botoes-check">
          <input type="checkbox" value="remember-me"> Lembre de mim
        </label>-->
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Fazer login</button>
    </form>

    <div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
    </div>

    <?php //require 'app/views/site/partials/footer.php'; ?>

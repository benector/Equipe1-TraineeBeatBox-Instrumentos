<div class="mensagem-welcome"">
    <?php
    if(isset($_SESSION['user'])){
        //$name="select name from users where email = '{$_SESSION['user']}'";
        //echo 'Bem Vindo, '. $_SESSION['user'].'.';
        //echo 'Bem Vindo, '. $name.'.';
        echo 'Seja bem vindo!';
    }
    ?>
</div>
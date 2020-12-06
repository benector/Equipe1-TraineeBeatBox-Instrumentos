<div class="mensagem-welcome"">
    <?php
    if(isset($_SESSION['user'])){
        echo 'Bem Vindo, '. $_SESSION['user'].'.';
    }
    ?>
</div>
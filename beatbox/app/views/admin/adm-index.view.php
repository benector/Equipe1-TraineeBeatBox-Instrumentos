<div class="mensagem-welcome"">
    <?php foreach ($users as $user) : ?>
    <h1>Bem vindo <?= $user->name ?><h1>
    <?php endforeach; ?>

</div>
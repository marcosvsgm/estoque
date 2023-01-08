<?php

use ocorvu\Estoque\Model\Acesso;

require_once "./vendor/autoload.php";
session_start();
$login = true;
if (!empty($_POST)) {
    $login = Acesso::login($_POST['usuario'], $_POST['senha']);
}
if (isset($_SESSION['logged']) && $_SESSION['logged']) {
    Acesso::nivel($_SESSION['nivel']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Login</title>
    <link rel="shortcut icon" href="public/IMAGES/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
<header>
    <h1 class="title mb-10 center">
        ESTOQUE
    </h1>
    <nav class="w-100">
        <ul class="flex mb-10 w-100">
        </ul>
    </nav>
</header>
<main>
    <h2 class="mb-10 center">Login</h2>
    <section>
        <?php if (!$login) { ?>
            <p class="login center">Usuário ou senha incorretos!</p>
        <?php } ?>
        <form class="w-80 m-auto" action="" method="POST">
            <label for="iUsuario">Usuário</label>
            <input class="w-100" name="usuario" id="iUsuario" type="text">

            <label for="iSenha">Senha</label>
            <input class="w-100" name="senha" id="iSenha" type="password">

            <button class="btn m-auto" type="submit">Entrar</button>
        </form>
    </section>
</main>
</body>
</html>
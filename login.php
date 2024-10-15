<!DOCTYPE html>
<html lang="pt-BRs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN DOS PROFESSORES</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include('layouts/header.php');
    ?>
<main class="main-content">
  <form action="#">
    <section class="cadastramento">
        <h1 class="big_letter">LOGIN</h1>
        <div class="valores">
        <label for="user"><span>Usuário</span>
        <input type="text" name="user">
        </label>
        <label for=""><span>Senha</span>
            <input type="password" name="senha" placeholder="">
        </label>
        
        </div>
        <button class="envio" type="button" onclick="location.href='ficha.php';">ENTRAR</button>
        </section>
  </form>


</main>
<script src="scripts/script.js"></script>
</body>
</html>
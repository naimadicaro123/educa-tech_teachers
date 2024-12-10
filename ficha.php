<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
    include('layouts/header.php');
?>
<main class="main-content">
        <form action="#" method="post">
            <section class="cadastramento">
                <h1 class="big_letter">LOGIN</h1>
                <div class="valores">
                    <label for="user">
                        <span>CPF do Aluno</span>
                        <input type="text" name="cpf_aluno" oninput="formatCPF(this)" required>
                    </label>
                    <label for="data">
                        <span>Ano de Matrícula</span>
                        <input type="text" name="data_nascimento">
                    </label>
                </div>
                <button class="envio" type="submit" onclick="location.href='informa.php';">ENTRAR</button>
            </section>
        </form>
    </main>
<script src="scripts/script.js"></script>
</body>
</html>

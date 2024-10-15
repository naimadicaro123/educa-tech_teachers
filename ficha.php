<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function formatDate(input) {
            // Remove caracteres não numéricos
            const value = input.value.replace(/\D/g, '');
            // Adiciona a barra após o dia e o mês
            if (value.length >= 2) {
                input.value = value.replace(/(\d{2})(\d)/, '$1/$2');
            }
            if (value.length >= 4) {
                input.value = value.replace(/(\d{2})(\d{2})(\d)/, '$1/$2/$3');
            }
        }
    </script>
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
            <label for="user"><span>Número de Matrícula</span>
                <input type="text" name="cpf_aluno" required>
            </label>
            <label for="data"><span>Data de Nascimento</span>
                <input type="text" name="data_nascimento" placeholder="DD/MM/AAAA" oninput="formatDate(this)" required>
            </label>
        </div>
        <button class="envio" type="submit">ENTRAR</button>
    </section>
  </form>
</main>
<script src="scripts/script.js"></script>
</body>
</html>

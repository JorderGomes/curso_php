<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Cadastro</h1>
    </header>
    <main>
        <?php
            $nome = $_GET['nome'] ?? 'Nome não informado';
            $sobrenome = $_GET['sobrenome'] ?? 'Sobrenome não informado';

            echo "<p>Nome completo: $nome $sobrenome </p>";
            // echo "<p>Sobrenome: $sobrenome</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>
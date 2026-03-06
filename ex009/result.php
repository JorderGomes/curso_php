<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            $num = $_GET['num'] ?? 'Número não informado';
            $ant = $num - 1;
            $suc = $num + 1;

            echo "<p>Antecessor: $ant</p>";
            echo "<p>Número: $num</p>";
            echo "<p>Successor: $suc</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>
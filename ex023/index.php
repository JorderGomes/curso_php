<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Caixa eletrônico</title>
</head>
<body>
    <?php 
        // Constantes das notas
        define('NOTA_100', 100);
        define('NOTA_50', 50);
        define('NOTA_20', 20);
        define('NOTA_10', 10);

        $valor = $_POST['valor'] ?? 0;

        $qtdNotas100 = floor($valor / NOTA_100);
        $valor = $valor % NOTA_100;

        $qtdNotas50 = floor($valor / NOTA_50);
        $valor = $valor % NOTA_50;

        $qtdNotas20 = floor($valor / NOTA_20);
        $valor = $valor % NOTA_20;

        $qtdNotas10 = floor($valor / NOTA_10);
        $valor = $valor % NOTA_10;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Valor a ser sacado (R$):</label>
            <input type="number" name="valor" id="valor" min="0" step="0.01" required>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <?php 
            echo '<h2>Notas necessárias para o saque:</h2>';
            echo "<p>Notas de R$100: $qtdNotas100</p>";
            echo "<p>Notas de R$50: $qtdNotas50</p>";
            echo "<p>Notas de R$20: $qtdNotas20</p>";
            echo "<p>Notas de R$10: $qtdNotas10</p>";
            echo "<p>Valor restante (se houver): R$ $valor</p>";
        ?>
    </section>
</body>
</html>
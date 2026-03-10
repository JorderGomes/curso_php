<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Analisador de números reais</title>
</head>
<body>
    <header>
        <h1>Analisador de números reais</h1>
    </header>
    <main>
        <form action="index.php" method="get">
            <label for="valor">Escreva um número real:</label>
            <input type="number" name="valor" id="valor" step="0.01" required>
            <input type="submit" value="Analisar">
        </form>
        <?php
            if (isset($_GET['valor'])) {
                $valor = $_GET['valor'];
                $inteira = (int)$valor;
                $decimal = $valor - $inteira;

                echo "<p>O número digitado foi: <strong>$valor</strong></p>";
                echo "<p>A parte inteira do número é: <strong>$inteira</strong></p>";
                echo "<p>A parte decimal do número é: <strong>$decimal</strong></p>";
            }
        ?>
    </main>
</body>
</html>
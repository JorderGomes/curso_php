<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Médias</title>
</head>
<body>
    <?php 
        $num1 = $_POST['num1'] ?? 0;
        $peso1 = $_POST['peso1'] ?? 0;
        $num2 = $_POST['num2'] ?? 0;
        $peso2 = $_POST['peso2'] ?? 0;
    ?>
    <main>
        <h1>Médias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num1">Informe o primeiro número:</label>
            <input type="number" name="num1" id="num1" step="0.01">
            <label for="peso1">Peso:</label>
            <input type="number" name="peso1" id="peso1" min="1" value="1">
            
            <label for="num2">Informe o segundo número:</label>
            <input type="number" name="num2" id="num2" step="0.01">
            <label for="peso2">Peso:</label>
            <input type="number" name="peso2" id="peso2" min="1" value="1">
            
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <?php 
            $mediaAritimetica = ($num1 + $num2) / 2;
            $mediaPonderada = ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);
            echo "<h2>Resultados</h2>";
            echo "<p>Média Aritmética: $mediaAritimetica</p>";
            echo "<p>Média Ponderada: $mediaPonderada</p>";
        ?>
    </section>
</body>
</html>
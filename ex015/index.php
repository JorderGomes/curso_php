<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formulário retro-alimentado</title>
</head>
<body>
    <?php 
        $num1 = $_GET['num1'] ?? 0;
        $num2 = $_GET['num2'] ?? 0;
    ?>
    <main>
        <h1>Somar</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1">
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2">
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $num1 + $num2;
            echo "<p>A soma de $num1 e $num2 é: $soma</p>";
        ?>
    </section>
</body>
</html>
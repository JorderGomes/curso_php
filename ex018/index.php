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
        $num = $_POST['num'] ?? 0;
    ?>
    <main>
        <h1>Médias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Informe o número:</label>
            <input type="number" name="num" id="num" step="0.01">
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <?php 
            $raizQuadrada = $num ** (1/2);
            $raizCubica = $num ** (1/3);
            echo "<p>A raiz quadrada de $num é $raizQuadrada</p>";
            echo "<p>A raiz cubica de $num é $raizCubica</p>";
        ?>
    </section>
</body>
</html>
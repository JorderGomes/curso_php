<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Anatomia da divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_POST['dividendo'] ?? 0;
        $divisor = $_POST['divisor'] ?? 0;
    ?>
    <main>
        <h1>Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendoId">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisorId">
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <?php 
            $quociente = (int) ($dividendo / $divisor);
            $resto = $dividendo % $divisor;
            echo "<p>Dividendo: $dividendo</p>";
            echo "<p>Divisor: $divisor</p>";
            echo "<p>Quociente: $quociente</p>";
            echo "<p>Resto: $resto</p>";
        ?>
    </section>
</body>
</html>
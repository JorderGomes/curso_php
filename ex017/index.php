<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cálculo de salário</title>
</head>
<body>
    <?php 
        $salario = $_POST['salario'] ?? 0;
        $salarioMinimo = 1212.00;
    ?>
    <main>
        <h1>Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Informe seu salário:</label>
            <input type="number" name="salario" id="salarioId" step="0.01">
            <button type="submit">Calcular</button>
        </form>
        <p>Considerando um salário mínimo de <strong>R$ 1.212,00</strong> </p>
    </main>
    <section id="resultado">
        <?php 
            $quociente = (int) ($salario / $salarioMinimo);
            $resto = $salario % $salarioMinimo;
            echo "<p>Com seu salário você possui: $quociente salários mínimos.</p>";
            echo "<p>E ainda restam: R$ " . number_format($resto, 2, ',', '.') . "</p>";
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cálculo de idade</title>
</head>
<body>
    <?php 
        $anoNascimento = $_POST['anoNascimento'] ?? 0;
        $anoDeCalculo = $_POST['anoDeCalculo'] ?? 0;
    ?>
    <main>
        <h1>Médias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="anoNascimento">Ano de nascimento:</label>
            <input type="number" name="anoNascimento" id="anoNascimento" min="1900" max="2026" value="1900">
            <?php 
                $anoAtual = date('Y');
                echo "<label for='anoDeCalculo'>";
                echo "Quer saber a sua idade em qual ano? (Atualmente estamos em $anoAtual)";
                echo "</label>";
                echo "<input type='number' name='anoDeCalculo' id='anoDeCalculo' min='1900' value='$anoAtual'>";
            ?>
            
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <?php 
            echo "<h2>Resultados</h2>";
            if ($anoDeCalculo < $anoNascimento) {
                echo "<p>O ano de cálculo deve ser maior ou igual ao ano de nascimento.</p>";
            } else {
                $idade = $anoDeCalculo - $anoNascimento;
                echo "<p>Em $anoDeCalculo, você terá $idade anos.</p>";
            }
        ?>
    </section>
</body>
</html>
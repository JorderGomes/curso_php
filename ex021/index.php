<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Reajuste</title>
</head>
<body>
    <?php 
        $preco = $_POST['preco'] ?? 0;
        $acrescimo = $_POST['acrescimo'] ?? 0;
        $valorAcrescimo = $preco * ($acrescimo / 100);
        $novoPreco = $preco + $valorAcrescimo;
    ?>
    <main>
        <h1>Reajuste</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Qual é o preço do produto?</label>
            <input type="number" name="preco" id="preco" step="0.01">
            <label for="acrescimo">Qual é o percentual de aumento?</label>
            <input type="range" name="acrescimo" id="acrescimo" min="0" max="100" step="1" value="0" oninput="this.nextElementSibling.value = this.value">
            <output>0</output>
            
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <?php 
            echo "<h2>Resultados</h2>";
            echo "<p>O valor do acréscimo é $valorAcrescimo </p>";
            echo "<p>O novo preço do produto é $novoPreco </p>";
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Número aleatório</title>
</head>
<body>
    <header>
        <h1>Número aleatório</h1>
    </header>
    <main>
        <p>Aprete o botão para sortear um número entre <b>1</b> e <b>100</b></p>
        <form action="index.php" method="post">
            <input type="submit" value="Sortear">
        </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = mt_rand(1, 100);
                echo "<p>O número sorteado foi: <strong>$numero</strong></p>";
            }
        ?>
    </main>
</body>
</html>
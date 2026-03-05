<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações aritiméticas</title>
</head>
<body>
    <header>
        <h1>Operações Aritméticas</h1>
    </header>
    <main>
        <?php 
            echo "<h2>Operadores Aritméticos</h2>";
            $n1 = 17;
            $n2 = 7;
            $n3 = 2; 

            echo "A soma entre $n1 e $n2 é: " . ($n1 + $n2) . "<br>";
            echo "A subtração entre $n1 e $n2 é: " . ($n1 - $n2) . "<br>";
            echo "A multiplicação entre $n1 e $n2 é: " . ($n1 * $n2) . "<br>";
            echo "A divisão entre $n1 e $n2 é: " . ($n1 / $n2) . "<br>";
            echo "A divisão inteira entre $n1 e $n2 é: " . intval($n1 / $n2) . "<br>";
            echo "O módulo entre $n1 e $n2 é: " . ($n1 % $n2) . "<br>";
            echo "A potência entre $n1 e $n3 é: " . ($n1 ** $n3) . "<br>";

            echo "<h2>Expressões Aritméticas</h2>";
            $resultado = ($n1 + $n2) / $n3;
            echo "O resultado da expressão ($n1 + $n2) / $n3 é: " . $resultado . "<br>";
            $resultado = $n1 + $n2 / $n3;
            echo "O resultado da expressão $n1 + $n2 / $n3 é: " . $resultado . "<br>";
            $resultado = 50 / 2 + 3 ** 2;
            echo "O resultado da expressão 50 / 2 + 3 ** 2 é: " . $resultado . "<br>";
            $resultado = 50 / (2 + 3) ** 2;
            echo "O resultado da expressão 50 / (2 + 3) ** 2 é: " . $resultado . "<br>";
        ?>
    </main>

</body>
</html>
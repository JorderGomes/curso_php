<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritiméticas</title>
</head>
<body>
    <header>
        <h1>Funções Aritméticas</h1>
    </header>
    <main>
        <?php 
            echo "<h2>Funções Aritméticas</h2>";
            echo "<hr>";
            $n1 = 17;
            $n2 = 7;
            $n3 = 2; 

            echo "O valor absoluto de -$n1 é: " . abs(-$n1) . "<br>";
            echo "O valor absoluto de -$n2 é: " . abs(-$n2) . "<br>";
            echo "O valor absoluto de -$n3 é: " . abs(-$n3) . "<br>";
            echo "<hr>";

            echo "O valor arredondado de 3.14159 é: " . round(3.14159) . "<br>";
            echo "O valor arredondado de 3.14159 com 2 casas decimais é: " . round(3.14159, 2) . "<br>";
            echo "<hr>";

            echo "O valor arredondado para baixo de 3.14159 é: " . floor(3.14159) . "<br>";
            echo "O valor arredondado para cima de 3.14159 é: " . ceil(3.14159) . "<br>";
            echo "<hr>";

            echo "A raiz quadrada de $n1 é: " . sqrt($n1) . "<br>";
            echo "A raiz quadrada de $n2 é: " . sqrt($n2) . "<br>";
            echo "A raiz quadrada de $n3 é: " . sqrt($n3) . "<br>";
            echo "<hr>";
            
            echo "O valor de 254 na base octal é: " . base_convert(254, 10, 8) . "<br>";
            echo "O valor de 254 na base hexadecimal é: " . base_convert(254, 10, 16) . "<br>";
            echo "O valor de 254 na base binária é: " . base_convert(254, 10, 2) . "<br>";
            echo "<hr>";
            
            echo "O valor da hipotenusa de um triângulo retângulo com catetos 4 e 3 é: " . hypot(4, 3) . "<br>";
            echo "O seno de 30 graus é: " . sin(deg2rad(30)) . "<br>";
            echo "O cosseno de 60 graus é: " . cos(deg2rad(60)) . "<br>";
            echo "A tangente de 45 graus é: " . tan(deg2rad(45)) . "<br>";
            echo "48 graus em radianos é: " . deg2rad(48) . "<br>";

            echo "<hr>";
            echo "A divisão inteira de $n1 por $n2 é: " . intdiv($n1, $n2) . "<br>";
            echo "O valor mínimo entre $n1, $n2 e $n3 é: " . min($n1, $n2, $n3) . "<br>";
            echo "O valor máximo entre $n1, $n2 e $n3 é: " . max($n1, $n2, $n3) . "<br>";
            echo "Obtendo PI com a função pi(): " . pi() . "<br>";
            echo "Obtendo PI com a constante M_PI: " . M_PI . "<br>";

        ?>
    </main>
</body>
</html>
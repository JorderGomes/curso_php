<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <h1>Variáveis e constantes</h1>
    <?php
        // Variáveis
        $nome = "João";
        $idade = 25;
        $altura = 1.75;
        $matriculado = true;

        echo "Nome: $nome<br>";
        echo "Idade: $idade anos<br>";
        echo "Altura: $altura metros<br>";
        echo "Matriculado: " . ($matriculado ? "Sim" : "Não") . "<br>";

        // Constantes
        const PI = 3.14159;
        define("GRAVIDADE", 9.81);

        echo "Valor de PI: " . PI . "<br>";
        echo "Valor da gravidade: " . GRAVIDADE . " m/s²<br>";
    ?>
    <h2>Regras para nomes de identificadores</h2>
    <ol>
        <li>Devem começar com uma o simbolo $</li>
        <li>O segundo pode ser letra ou simbolo _</li>
        <li>A partir do terceiro aceita-se: [a-z][A-Z][0-9] e [_]</li>
        <li>Aceita-se caracteres da tabela ASCII a partir de 128</li>
        <li>Aceita caracteres acentuados</li>
        <li>São case-sensitive (diferencia maiúsculas e minúsculas)</li>
        <li>Não podem ser palavras reservadas do PHP</li>
    </ol>
    <h2>Recomendações para nomes de variáveis</h2>
    <ol> 
        <li>Use nomes descritivos e significativos</li>
        <li>Evite nomes genéricos como $a, $b, $c</li>
        <li>Defina um padrão</li>
        <li>Em variáveis dê preferência a letras minúsculas</li>
        <li>Use camelCase para nomes compostos</li>
        <li>Para constantes, use letras maiúsculas e underscores</li>
        <li>Mantenha consistência no uso de nomes</li>
    </ol>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Strings</title>
</head>
<body>
    <?php 
        echo "<h2>Concatenação básica</h2>";
        $nome = "Gustavo";
        $sobrenome = "Santos";
        $nomeCompleto = $nome . " " . $sobrenome;
        echo "O nome completo é: " . $nomeCompleto . "<br>";

        echo "<h2>Double quotes</h2>";

        echo "<h3>Permite interpolação de variáveis</h3>"; 
        echo "O nome completo é: $nomeCompleto <br>";

        echo "<h3>Permite unicode</h3>";  
        echo "php \u{1F418} <br>";

        echo "<h2>Single quotes</h2>";

        echo "<h3>Não permite interpolação de variáveis</h3>"; 
        echo 'O nome completo é: $nomeCompleto <br>';

        echo "<h3>Não permite unicode</h3>"; 
        echo 'php \u{1F418}' . '<br>';

        echo "<h2>Constantes e resultados de funções</h2>";
        const ESTADO = "CE";

        echo "<h3>Não aceitam interpolação</h3>";
        echo "O estado é ESTADO <br>";
        echo "O dia de hoje é: date('d/m/Y')";
        
        echo "<h3>Aceitam concatenação</h3>";
        echo "O estado é " . ESTADO . "<br>";
        echo "O dia de hoje é: " . date('d/m/Y');

        echo "<h2>Misturando aspas simlpes com aspas duplas</h2>";
        $nomeLutador = "Rodrigo";
        $sobrenomeLutador = "Nogueira";
        echo "O nome do lutador é: $nomeLutador \"Minotauro\" $sobrenomeLutador <br>";
        
    ?>
    <h2>Escape sequences</h2>
    <ul>
        <li>\n - Nova linha</li>
        <li>\t - Tabulação</li>
        <li>\" - Aspas duplas</li>
        <li>\' - Aspas simples</li>
        <li>\\ - Barra invertida</li>
        <li>\$ - Sinal de dólar</li>
        <li>\u{1F418} - Emoji de elefante</li>
    </ul>
</body>
</html>
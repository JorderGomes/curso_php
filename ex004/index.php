<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>
    <?php
        // Escalares
        $nome = "Gustavo"; // string
        $idade = 25; // int
        $altura = 1.75; // float
        $isStudent = True; // boolean
        $idHex = 0x1A; // hexadecimal
        $idOctal = 012; // octal
        $idBinary = 0b1010; // binary
        $notacaoCientifica = 5e3; // notação científica

        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade</p>";
        echo "<p>Altura: $altura</p>";
        echo "<p>É estudante? " . ($isStudent ? "Sim" : "Não") . "</p>";
        echo "<p>ID Hexadecimal: $idHex</p>";
        echo "<p>ID Octal: $idOctal</p>";
        echo "<p>ID Binário: $idBinary</p>";
        echo "<p>Notação Científica: $notacaoCientifica</p>";

        // Compostos
        $frutas = ["Maçã", "Banana", "Laranja"]; // array
        $pessoa = ["nome" => "Gustavo", "idade" => 25]; // array associativo
        $dataNascimento = new DateTime("1998-01-01"); // objeto
        class Carro {
            public $marca;
            public $modelo;

            public function __construct($marca, $modelo) {
                $this->marca = $marca;
                $this->modelo = $modelo;
            }
        }
        $meuCarro = new Carro("Toyota", "Corolla");

        var_dump($frutas);
        echo "<br>";
        var_dump($pessoa);
        echo "<br>";
        var_dump($dataNascimento);
        echo "<br>";
        var_dump($meuCarro);
        echo "<br>";

    ?>
</body>
</html>
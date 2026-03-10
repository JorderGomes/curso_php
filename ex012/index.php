<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Conversor de moedas</title>
</head>

<body>
    <header>
        <h1>Insira um valor em reais</h1>
    </header>
    <main>
        <form action="index.php" method="get">
            <label for="valor">Valor em reais:</label>
            <input type="number" name="valor" id="valor" step="0.01" required>
            <input type="submit" value="Converter">
        </form>
        <?php
        if (isset($_GET['valor'])) {
            $valor = $_GET['valor'];

            $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Erro:' . curl_error($ch);
            }
            $data = json_decode($response, true);
            $cotacao = $data['USDBRL']['bid']; // Cotação do dólar

            $dolar = $valor / $cotacao;
            echo "<p>R$ " . number_format($valor, 2, ',', '.') . " equivalem a US$ " . number_format($dolar, 2, '.', ',') . " na cotação de " . number_format($cotacao, 2, '.', ',') . "</p>";
        }
        ?>
    </main>
</body>

</html>
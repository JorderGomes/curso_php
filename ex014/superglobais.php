<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Super globais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia", "terça", time() + 3600);
                session_start();
                $_SESSION["nome"] = $_POST["user"] ?? "Sem nome";

                echo "<h2>Super global GET</h2>";
                var_dump($_GET);

                echo "<h2>Super global POST</h2>";
                var_dump($_POST);

                echo "<h2>Super global REQUEST</h2>";
                var_dump($_REQUEST);

                echo "<h2>Super global COOKIE</h2>";
                var_dump($_COOKIE);

                echo "<h2>Super global SESSION</h2>";
                var_dump($_SESSION);

                echo "<h2>Super global ENV</h2>";
                var_dump($_ENV);

                echo "<h2>Super global SERVER</h2>";
                var_dump($_SERVER);

                echo "<h2>Super global GLOBALS</h2>";
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>
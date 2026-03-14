<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Contagem de tempo</title>
</head>
<body>
    <?php 
        $_SEC_IN_WEEK = 7 * 24 * 60 * 60;
        $_SEC_IN_DAY = 24 * 60 * 60;
        $_SEC_IN_HOUR = 60 * 60;
        $_SEC_IN_MINUTE = 60;

        $totalSegundos = $_POST['seconds'] ?? 0;

        $totalWeeks = floor($totalSegundos / $_SEC_IN_WEEK);
        $totalSegundos = $totalSegundos % $_SEC_IN_WEEK;

        $totalDays = floor($totalSegundos / $_SEC_IN_DAY);
        $totalSegundos = $totalSegundos % $_SEC_IN_DAY;

        $totalHours = floor($totalSegundos / $_SEC_IN_HOUR);
        $totalSegundos = $totalSegundos % $_SEC_IN_HOUR;

        $totalMinutes = floor($totalSegundos / $_SEC_IN_MINUTE);
        $totalSegundos = $totalSegundos % $_SEC_IN_MINUTE;
    ?>
    <main>
        <h1>Contagem de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seconds">Quantidade de segundos</label>
            <input type="number" name="seconds" id="seconds">
            
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section id="resultado">
        <?php 
            echo "<h2>Resultados</h2>";
            echo "<p>Semanas: $totalWeeks</p>";
            echo "<p>Dias: $totalDays</p>";
            echo "<p>Horas: $totalHours</p>";
            echo "<p>Minutos: $totalMinutes</p>";
            echo "<p>Segundos: $totalSegundos</p>";
        ?>
    </section>
</body>
</html>
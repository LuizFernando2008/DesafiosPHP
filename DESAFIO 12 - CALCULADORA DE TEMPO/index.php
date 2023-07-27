<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Informe a quaintidade de segundos: </label>
            <input type="number" name="seg" id="seg" min="0">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $seg = $_GET['seg'] ?? 0;

            $sem = (int)($seg / 604_800);
            $restoSem = $seg % 604_800;

            $dias = (int)($restoSem / 86_400);
            $restoDias = $restoSem % 86_400;

            $horas = (int)($restoDias / 3_600);
            $restoHoras = $restoDias % 3_600;

            $min = (int)($restoHoras / 60);

            $segundos = $restoHoras % 60;

            echo "$seg de segundos é igual a:";
            echo "<ul>";
            echo "<li>$sem semanas.";
            echo "<li>$dias dias.";
            echo "<li>$horas horas.";
            echo "<li>$min minutos.";
            echo "<li>$segundos segundos.";
            echo "</ul>"
        ?>
    </section>
</body>
</html>
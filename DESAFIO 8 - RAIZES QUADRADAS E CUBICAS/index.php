<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Raízes</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="num">Informe um número: </label>
        <input type="number" name="num" id="num" step="0.01">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultados: </h2>
        <?php 
            $num = $_GET["num"] ?? 0;
            $raizQuadrada = $num ** (1/2);
            $raizCubica = $num ** (1/3);

            echo "<p><ul>";
            echo"<li>A raíz quadrada de $num é " .number_format($raizQuadrada, 2, ",", ".").".\n";
            echo "<li>A raíz cúbica de $num é " .number_format($raizCubica, 2, ",", ".").".\n";
            echo "</ul></p>";

        ?>
    </section>
</body>
</html>
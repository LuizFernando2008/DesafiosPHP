<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da divisão: </h2>
       <?php 
            $dividendo = $_GET["dividendo"] ?? 0;
            $divisor = $_GET["divisor"] ?? 1;

            $resDiv =($dividendo / $divisor);
            $resto = $dividendo % $divisor;

            echo "<table class='divisao'><tr><td>$dividendo</td><td>$divisor</td></tr>";

            echo "<tr><td>$resto</td><td>".(int)$resDiv."</td></tr></table>";
       ?>

    </section>
</body>
</html>

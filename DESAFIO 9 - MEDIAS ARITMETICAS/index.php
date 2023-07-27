<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">Informe o 1º valor: </label>
            <input type="number" name="v1" id="v1" step="0.1">
            <label for="peso1">Informe o peso do 1º valor: </label>
            <input type="number" name="p1" id="p1">
            <label for="valor2">Informe o 2º valor: </label>
            <input type="number" name="v2" id="v2" step="0.1">
            <label for="peso2">Informe o peso do 2º valor: </label>
            <input type="number" name="p2" id="p2">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultados: </h2>
        <?php 
            $valor1 = $_GET["v1"] ?? 0;
            $valor2 = $_GET["v2"] ?? 0;

            $peso1 = $_GET["p1"] ?? 1;
            $peso2 = $_GET["p2"] ?? 1;

            $mediaAritmSimples = ($valor1 + $valor2) / 2;
            $mediaAritmPondera = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "A média aritmética simples é <strong>".number_format($mediaAritmSimples, 2, ",", ".")."</strong>.\n";
            echo "A média aritmética ponderada é <strong>".number_format($mediaAritmPondera, 2, ",", ".")."</strong>.\n";

        ?>
    </section>
</body>
</html>

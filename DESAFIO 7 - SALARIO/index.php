<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Salário mínimo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salarioInfo">Qual é o seu salário?</label>
            <input type="number" name="salarioInfo" id="salarioInfo" step="0.01">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado:</h2>
        <?php 
            $salarioInfo = $_GET["salarioInfo"] ?? 0;
            $salarioMin = 1320.00;
            $comparacao = $salarioInfo / $salarioMin;
            $resto = $salarioInfo % $salarioMin;

            echo "O seu salário é igual a <strong>" .number_format($comparacao, 2, ",", ".")."</strong> vez(es) o salário mínimo, com mais R\$$resto."

        ?>
    </section>
</body>
</html>
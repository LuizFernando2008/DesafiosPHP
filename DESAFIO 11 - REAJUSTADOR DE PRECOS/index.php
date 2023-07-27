<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto:</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$preco?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
            <h2>Resultado do reajuste:</h2>
        <?php 
            $aumento = ($preco * $reaj) / 100;
            $novo = $preco + $aumento;

            echo "O produto que custava <strong>R\$".number_format($preco, 2, ",", ".")."</strong>, com <strong>$reaj%</strong> de aumento, vai passar a custar <strong>R\$".number_format($novo, 2, ",", ".")."</strong> a partir de agora."
        ?>

    </section>
    <script>

        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>
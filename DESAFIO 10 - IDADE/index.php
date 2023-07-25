<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="anoInfo">Informe seu ano de nascimento:</label>
        <input type="number" name="anoInfo" id="anoInfo">
        <label for="ano2Info">Informe o ano que você gostaria de saber a sua idade:</label>
        <input type="number" name="ano2Info" id="ano2Info">
        <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado: </h2>
        <?php 
            $anoInfo = $_GET["anoInfo"] ?? 0;
            $ano2Info = $_GET["ano2Info"] ?? 0;
            $idade = $ano2Info - $anoInfo;
            $anoAtual = date("Y");

            if($ano2Info < $anoInfo){
                echo "Você não estava vivo nesta época. Nâo é possível ter anos de idade negativos!";
            } else if($idade > 120){
                echo "Eu espero que sim, mas acho que você não vai estar vivo até lá.";
            }else{
                echo "Considerando o ano atual: <strong>*$anoAtual</strong><br>";
            echo "Em <strong>$ano2Info</strong> você estaria com <strong>$idade</strong> anos de idade.";
            }
        ?>
    </section>

</body>
</html>
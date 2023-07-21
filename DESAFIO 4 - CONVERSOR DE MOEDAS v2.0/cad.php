<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v2.0 - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <main>
        <h1>Conversor de moedas v2.0</h1>

        <?php 
            $início = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$início.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
     
            $dados = json_decode(file_get_contents($url), true);
     
            $cotação = $dados["value"][0] ["cotacaoCompra"];

            $real = $_GET["numero"] ?? 0;
            $dólar = $real / $cotação;  
           
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

             echo "<p>Seus <strong>" . numfmt_format_currency($padrão, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") ."</strong>.</p>";
            
             $texto = "<p>\n*Cotação atualizada vinda do site do Banco central do Brasil.</p>";
             echo nl2br($texto);

        ?>

    <button onclick ="javascript:history.go(-1)">Voltar</button>
</body>
</html>
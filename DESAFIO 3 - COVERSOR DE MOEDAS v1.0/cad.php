<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v1.0 - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
            $cotacao = 4.77;

            $real = $_GET["numero"] ?? 0;
            
            $dolar = $real / $cotacao;  
           
         $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") ."</strong>.</p>";
            
            $texto = "<p>\n*Cotação <em>fixa</em> de R$4,79</p>";
            echo nl2br($texto);

        ?>

    <button onclick ="javascript:history.go(-1)">Voltar</button>
</body>
</html>
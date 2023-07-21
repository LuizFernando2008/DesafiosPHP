<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
    <main>
        <h1>Gerador de números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 60;
            $num = mt_rand($min, $max);

            echo "Gerando um número aleatório entre 0 e 60...<br>";
            echo "O número gerado foi: <strong>$num</strong>";
            ?>

    <button onclick="javascript:document.location.reload()">Gerar</button>

    </main>

</body>
</html>
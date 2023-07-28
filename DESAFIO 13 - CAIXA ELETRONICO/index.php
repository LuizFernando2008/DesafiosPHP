<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulando um caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
        $resto = $saque;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Informe o valor que você deseja sacar: (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5</sup></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>

        <?php 
            $tot100 = (int)($resto / 100);
            $resto %= 100;

            $tot50 = (int)($resto / 50);
            $resto %= 50;

            $tot20 = (int)($resto / 20);
            $resto %= 20;

            $tot10 = (int)($resto / 10);
            $resto %= 10;

            $tot5 = (int)($resto / 5);
        ?>

        <ul>    
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x<?=$tot20?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot5?></li>
        </ul>

    </section>
</body>
</html>
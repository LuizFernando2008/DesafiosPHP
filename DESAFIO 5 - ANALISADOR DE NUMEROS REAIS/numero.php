<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>" .number_format($num, 2, ",", "."). "</strong> informado pelo usuário: </p>";

            $int = (int) $num;
            echo "<ul><li>A parte inteira do número é <strong>".number_format($int, 0, ",", ".")."</strong></li></ul>";

            $float = $num - $int;
            echo "<ul><li>A parte inteira do número é <strong>".number_format($float, 2, ",", ".")."</strong></li></ul>";

        ?>
       <button onclick ="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
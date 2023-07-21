<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    
    <main>
        <h1>Antecessor e Sucessor</h1>
        <?php 
            $numero = $_GET["numero"] ?? "NULL";
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O número informado foi <strong>$numero</strong>.";

            echo "<ul>";
            echo "<li>O antecessor de $numero é <strong>$antecessor</strong>.";
            echo "<li>O sucessor de $numero é <strong>$sucessor</strong>.";
            echo "</ul>";
        ?>

    <p><a href ="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>

</body>
</html>
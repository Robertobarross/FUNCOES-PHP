<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular estoque</title>
</head>
<body>

    <form action="index.php" method="get">
        <input type="number" name="quantidadeMinima" id=""><br>
        <input type="number" name="quantidadeMaxima" id=""><br>
        <input type="submit" value="Calcular"><br>
    </form>

    <?php

    function calcularestoque(){

        @$quantidadeMinima = $_GET['quantidadeMinima'];
        @$quantidadeMaxima = $_GET['quantidadeMaxima'];

        $calcularestoque = ($quantidadeMinima + $quantidadeMaxima)/2;

        echo "<br>Estoque minimo: $quantidadeMinima";
        echo "<br>Estoque máximo: $quantidadeMaxima";
        echo "<p>Estoque médio: $calcularestoque";

    }

    $estoque = calcularestoque();
    return $estoque;

    ?>
    
</body>
</html>
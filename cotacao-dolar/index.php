<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação do dólar</title>
</head>
<body>

    <form action="index.php" method="get">
        Dólares: <input type="text" name="dolar"> Quatidade em dólares<br>
        Cotação: <input type="text" name="cotacao" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$"> Valor do dólar em reai$<br>
        <input type="submit" value="Calcular cotação"><br>
    </form>

    <?php

    function cotacaoDolar(){

        @$dolar = $_GET['dolar'];
        @$cotacao = $_GET['cotacao'];

        @$cotacaoDolar = ($dolar * $cotacao);

        echo "<br>Dólares: $dolar";
        echo "<br>Cotação: $cotacao";
        echo "<p>Total em R$: $cotacaoDolar";     

    }

    $retornarResultado = cotacaoDolar();
    return $retornarResultado;

    ?>
    
</body>
</html>
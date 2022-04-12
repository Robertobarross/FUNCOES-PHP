<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Valor</title>
</head>
<body>

    <form action="index.php" method="get">

        Código: <input type="number" name="codigo" id=""><br>
        Nome: <input type="text" name="peca"><br>
        Valor: <input type="text" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" name="valor"><br>
        Quantidade: <input type="number" name="quantidade" id=""><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
/*
        @$codigo = $_GET['codigo'];
        @$peca = $_GET['peca'];
        @$valor = $_GET['valor'];
        @$quantidade = $_GET['quantidade'];

        @$vendaPecas = ($quantidade * $valor);

        echo "<br>Código: $codigo";
        echo "<br>Peça: $peca";
        echo "<br>Valor: $valor";
        echo "<br>Quantidade: $quantidade";
        echo "<br>Valor total: $vendaPecas R$";
*/

       function vendaPecas(){

        @$codigo = $_GET['codigo'];
        @$peca = $_GET['peca'];
        @$valor = $_GET['valor'];
        @$quantidade = $_GET['quantidade'];

        @$vendaPecas = ($quantidade * $valor);

        echo "<br>Código: $codigo";
        echo "<br>Peça: $peca";
        echo "<br>Valor: $valor";
        echo "<br>Quantidade: $quantidade";
        echo "<br>Valor total: $vendaPecas R$";
           
       }

       $campos = vendaPecas();
       return $campos;

    ?>
    
</body>
</html>
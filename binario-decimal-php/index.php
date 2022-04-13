<?php
/*
function conerteBinarioParaDecimal(){

 // valor binário como string
  $binario = "1100110101"; // Retorna 821
   
  // converte para decimal
  $decimal = bindec($binario);
   
  // exibe o resultado
  echo "O resultado da conversão é: " . $decimal;

}
$resultado = conerteBinarioParaDecimal();
return $resultado;
*/


function binarioDecimal(){

  // Coverter binário para decimal
    echo bindec('1100110101') . "\n"; // 821
    echo bindec('10000000000') . "\n"; // 1024
    echo bindec('10000011') . "\n"; // 131
    echo bindec('1001100') . "\n"; // 76
    echo bindec('1111') . "\n"; // 15
    echo bindec('1010110') . "\n"; // 86
    echo bindec('100111100') . "\n"; // 316
    echo bindec('110100010011') . "\n"; // 3347
    echo bindec('10111101') . "\n"; // 189

}
$resuladoConversao = binarioDecimal();
return $resuladoConversao;

?>

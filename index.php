<?php 
// Arquivo index responsável pela inicialização do sistema

require_once "configuracao.php"; 
include_once "helpers.php"; 

echo "R$" . formatarValor(10000);
echo formatarNumero(1000000000000);

// $valor = 3;
// if ($valor) {
//     echo $valor;
// } else {
//     echo 0;
// }

// echo $valor ? $valor : 0;
// echo $valor ?: 0;
?>
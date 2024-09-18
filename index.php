<?php 
// Arquivo index responsável pela inicialização do sistema

require_once "configuracao.php"; 
include_once "helpers.php"; 

$texto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptatibus aliquam, ipsam sed dolorem, at quo, quas quibusdam fuga dolores adipisci incidunt repellendus quasi praesentium harum reprehenderit non atque maiores?"; 

// echo $total = mb_strlen(trim($texto));
// echo $resumo = mb_substr($texto, 0, 50);
// echo $ocorrencia = mb_strrpos($texto, ".");

// echo saudacao();
// echo "<hr>";
echo resumirTexto($texto, 50,);
?>
<?php
// Arquivo index responsável pela inicialização do sistema

require_once "configuracao.php";
include_once "helpers.php";

echo dataAtual();
echo "<hr>";

// $meses = array();
$meses = [1 => "Janeiro", "Fevereiro", "Março"];

foreach ($meses as $chave) {
    echo $chave . "<br>";
}

var_dump($meses);
echo "<hr>";

echo $meses[1];
echo "<hr>";

echo $_SERVER["PHP_SELF"];
echo "<hr>";

var_dump($_SERVER);

<?php
// Arquivo index responsável pela inicialização do sistema

require_once "sistema/configuracao.php";
include_once "helpers.php";
include './sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();
var_dump($msg);
echo "<br>";
echo $msg->renderizar();

<?php
// Arquivo index responsável pela inicialização do sistema

require_once "Sistema/configuracao.php";
include_once "Sistema/Nucleo/Helpers.php";
include 'Sistema/Nucleo/Mensagem.php';

use Sistema\Nucleo\Helpers;

// use Sistema\Nucleo\Mensagem as Msg;
// echo (new Msg())->alerta("Mensagem de alerta");

// $helper = new Helpers();
// echo $helper->validarCpf("44052813863");

// echo Helpers::limparNumero("44052 841-3'863");

echo Helpers::saudacao();

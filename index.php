<?php
// Arquivo index responsável pela inicialização do sistema

require_once "Sistema/configuracao.php";
include_once "Sistema/Nucleo/Helpers.php";
include 'Sistema/Nucleo/Mensagem.php';
include 'Sistema/Nucleo/Controlador.php';

use Sistema\Nucleo\Controlador;

$controlador = new Controlador();
echo "<br>";
var_dump($controlador);

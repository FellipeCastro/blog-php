<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
// Arquivo index responsável pela inicialização do sistema

require_once "sistema/configuracao.php";
include_once "helpers.php";
include './Sistema/Nucleo/Mensagem.php';

use Sistema\Nucleo\Mensagem as Msg;

echo (new Msg())->alerta("Mensagem de alerta");

// $msg = new Mensagem();
// echo $msg->sucesso("Mensagem de sucesso com novo método")->renderizar();

// echo (new Mensagem())->sucesso("Mensagem de sucesso")->renderizar();

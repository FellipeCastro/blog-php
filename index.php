<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
// Arquivo index responsável pela inicialização do sistema

require_once "sistema/configuracao.php";
include_once "helpers.php";
include './sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();
var_dump($msg);
echo "<br>";
echo $msg->sucesso("Mensagem de sucesso com novo método")->renderizar();
echo $msg->erro("Mensagem de erro com novo método")->renderizar();
echo $msg->alerta("Mensagem de alerta com novo método")->renderizar();
echo $msg->informa("Mensagem de informação com novo método")->renderizar();

<?php
// Arquivo index responsável pela inicialização do sistema

require_once "configuracao.php";
include_once "helpers.php";

$email = "teste@teste.com";

if (validarEmail($email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}

echo "<br>";

$url = "https://www.youtube.com";

if (validarUrl($url)) {
    echo "URL válida";
} else {
    echo "URL inválida";
}

echo "<br>";

if (validarUrlComFiltro($url)) {
    echo "URL válidada com filtro";
} else {
    echo "URL inválidada pelo filtro";
}

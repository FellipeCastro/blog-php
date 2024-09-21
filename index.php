<?php
// Arquivo index responsável pela inicialização do sistema

require_once "configuracao.php";
include_once "helpers.php";

// $numero = 1;

// while ($numero <= 10) {
//     echo $numero++;
// }

for ($i = 1; $i <= 10; $i++) {
    echo "Tabuada do $i" . "<br>";
    for ($n = 1; $n <= 10; $n++) {
        echo $i . " x " . $n . " = " . $i * $n . "<br>";
    }
    echo "<hr>";
}

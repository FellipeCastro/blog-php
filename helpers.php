<?php 
function saudacao() {
    $hora = 7;
    $saudacao = "";

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = "Boa madrugada";
    }

    if ($hora >= 6 && $hora <= 12) {
        $saudacao = "Bom dia";
    }

    return $saudacao;
};

function resumirTexto(string $texto, int $limite, $continue = "..."): string {
    return $texto;
};
?>
<?php

class Mensagem 
{
    private $texto;
    private $css;

    public function renderizar(): string 
    {
        return $this->texto = $this->filtrar("Mensagem de teste com método");
    }

    private function filtrar(string $mensagem): string 
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

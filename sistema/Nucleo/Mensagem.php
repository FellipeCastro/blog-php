<?php

namespace Sistema\Nucleo;

class Mensagem 
{
    private $texto;
    private $css;
    
    public function __toString()
    {
        return $this->renderizar();
    }

    public function sucesso(string $mensagem): Mensagem
    {
        $this->css = "alert alert-success m-3";
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function erro(string $mensagem): Mensagem
    {
        $this->css = "alert alert-danger m-3";
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function alerta(string $mensagem): Mensagem
    {
        $this->css = "alert alert-warning m-3";
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function informa(string $mensagem): Mensagem
    {
        $this->css = "alert alert-primary m-3";
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function renderizar(): string 
    {
        return "<div class='{$this->css}'>{$this->texto}</div>";
    }

    private function filtrar(string $mensagem): string 
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

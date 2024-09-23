<?php 

namespace Sistema\Nucleo;

class Helpers 
{
    public static function validarCpf(string $cpf): bool
    {
        $cpf = self::limparNumero($cpf);
    
        if (mb_strlen($cpf) != 11 || preg_match("/(\d)\1{10}/", $cpf)) {
            return false;
        }
    
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d = $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
    
        return true;
    }
    
    public static function limparNumero(string $numero): string 
    {
        return preg_replace("/[^0-9]/", "", $numero);
    }
    
    public static function slug(string $string): string
    {
        $mapa["a"] = 'áàâãäåçéèêëíìîïñóòôõöúùûüýÿÁÀÂÃÄÅÇÉÈÊËÍÌÎÏÑÓÒÔÕÖÚÙÛÜÝ';
        $mapa["b"] = 'aaaaaaceeeeiiiinooooouuuuyyAAAAAACEEEEIIIINOOOOOUUUUY';
    
        $slug = strtr(utf8_decode($string), utf8_decode($mapa["a"]), $mapa["b"]);
        $slug = strip_tags(trim($slug));
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(["-----", "----", "---", "--", "-"], "-", $slug);
    
        return strtolower(utf8_decode($slug));
    }
    
    public static function dataAtual(): string
    {
        $diaMes = date("d");
        $diaSemana = date("w");
        $mes = date("n") - 1;
        $ano = date("Y");
    
        $nomesDiasDaSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    
        $nomesDosMeses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    
    
        $dataFormatada = $nomesDiasDaSemana[$diaSemana] . ", " . $diaMes . " de " . $nomesDosMeses[$mes] . " de " . $ano;
    
        return $dataFormatada;
    }
    
    public static function url(string $url): string
    {
        $servidor = filter_input(INPUT_SERVER, "SERVER_NAME");
        $ambiente = ($servidor == "localhost" ? URL_DESENVOLVIMENTO : URL_PRODUCAO);
    
        if (str_starts_with($url, "/")) {
            return $ambiente . $url;
        }
    
        return $ambiente . "/" . $url;
    }
    
    public static function localhost(): bool
    {
        $servidor = filter_input(INPUT_SERVER, "SERVER_NAME");
    
        if ($servidor == "localhost") {
            return true;
        }
    
        return false;
    }
    
    public static function validarUrl(string $url): bool
    {
        if (mb_strlen($url) < 10) {
            return false;
        };
    
        if (!str_contains($url, ".")) {
            return false;
        };
    
        if (str_contains($url, "http://") or str_contains($url, "https://")) {
            return true;
        };
    
        return false;
    }
    
    public static function validarUrlComFiltro(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
    
    public static function validarEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    public static function contarTempo(string $data): string
    {
        $agora = strtotime(date("Y-m-d H:i:s"));
        $tempo = strtotime($data);
        $diferenca = $agora - $tempo;
    
        $segundos = $diferenca;
        $minutos = round($diferenca / 60);
        $horas = round($diferenca / 3600);
        $dias = round($diferenca / 86400);
        $semanas = round($diferenca / 604800);
        $meses = round($diferenca / 2419200);
        $anos = round($diferenca / 29030400);
    
        if ($segundos <= 60) {
            return "agora";
        } elseif ($minutos <= 60) {
            return $minutos == 1 ? "Há um minuto" : "Há " . $minutos . " minutos";
        } elseif ($horas <= 24) {
            return $horas == 1 ? "Há uma hora" : "Há " . $horas . " horas";
        } elseif ($dias <= 7) {
            return $dias == 1 ? "Ontem" : "Há " . $dias . " dias";
        } elseif ($semanas <= 4) {
            return $semanas == 1 ? "Há uma semana" : "Há " . $semanas . " semanas";
        } elseif ($meses <= 12) {
            return $meses == 1 ? "Há um mês" : "Há " . $meses . " meses";
        } else {
            return $anos == 1 ? "Há um ano" : "Há " . $anos . " anos";
        }
    }
    
    public static function formatarValor(float $valor = null): string
    {
        return number_format($valor ? $valor : 0, 2, ",", ".");
    }
    
    public static function formatarNumero(string $numero = null): string
    {
        return number_format($numero ? $numero : 0, 0, ".", ".");
    }
    
    public static function saudacao()
    {
        $hora = date("H");
    
        $saudacao = match (true) {
            $hora >= 0 && $hora <= 5 => "Boa madrugada",
            $hora >= 6 && $hora <= 12 => "Bom dia",
            $hora >= 13 && $hora <= 18 => "Boa tarde",
            default => "Boa noite"
        };
    
        return $saudacao;
    }
    /**
     * Resume um texto
     * 
     * @param string $texto texto para resumir
     * @param int $limite quantidade de caracteres
     * @param string $continue opcional - o que deve ser exibido ao final do resumo
     * @return string texto resumido
     */
    public static function resumirTexto(string $texto, int $limite, $continue = "..."): string
    {
        $textoLimpo = trim(strip_tags($texto));
        if (mb_strlen($textoLimpo) <= $limite) {
            return $textoLimpo;
        };
    
        $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ""));
    
        return $resumirTexto . $continue;
    }
}

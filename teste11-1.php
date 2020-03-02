<?php

final class Eq2grau
{

    private $valorA;
    private $valorB;
    private $valorC;

    function __construct($valorA, $valorB, $valorC)
    {
        $this->valorA = $valorA;
        $this->valorB = $valorB;
        $this->valorC = $valorC;
    }

    private function escrever()
    { // string da equação
        if ($this->valorB < 0 && $this->valorC < 0) {
            $eq = $this->valorA . "x<sup>2</sup>&nbsp;" . $this->valorB . "x&nbsp;" . $this->valorC . "&nbsp;=&nbsp;0";
        } elseif ($this->valorB >= 0 && $this->valorC < 0) {
            $eq = $this->valorA . "x<sup>2</sup>&nbsp;+" . $this->valorB . "x&nbsp;" . $this->valorC . "&nbsp;=&nbsp;0";
        } elseif ($this->valorB < 0 && $this->valorC >= 0) {
            $eq = $this->valorA . "x<sup>2</sup>&nbsp;" . $this->valorB . "x&nbsp;+" . $this->valorC . "&nbsp;=&nbsp;0";
        } else {
            $eq = $this->valorA . "x<sup>2</sup>&nbsp;+" . $this->valorB . "x&nbsp;+" . $this->valorC . "&nbsp;=&nbsp;0";
        }
        return $eq;
    }

    public function calcular()
    { // cálculo da equação        
        if ($this->valorA == 0) {
            return ["Erro: 'A' não pode ser Zero!", '&empty;', '&empty;', '&empty;'];
        } else {
            $d = ((pow($this->valorB, 2)) - (4 * $this->valorA * $this->valorC)); // cálculo do delta               
            if ($d < 0) {
                return [$this->escrever(), number_format($d, 1), '&empty;', '&empty;'];
            } else {
                $x1 = ((-1 * $this->valorB) + (sqrt($d))) / (2 * $this->valorA); // cálculo de Basckara
                $x2 = ((-1 * $this->valorB) - (sqrt($d))) / (2 * $this->valorA);
                return [$this->escrever(), number_format($d, 1), number_format($x1, 1), number_format($x2, 1)];
            }
        }
    } // vetor resposta (equação, delta, x1, x2)

}

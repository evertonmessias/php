<?php
require_once './teste14-1.php';
class Aluno extends Pessoas {    
    private $matr;
    function getMatr() {return $this->matr;}
    function setMatr($matr) {$this->matr = $matr;}
    public function aula() {
        echo "<p>*** ".$this->getNome()." Reprovou !!! ***";}}
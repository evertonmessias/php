<?php
require_once './teste14-1.php';
class Professor extends Pessoas {
    private $sal;
    function getSal() {return $this->sal;}
    function setSal($sal) {$this->sal = $sal;}
    public function aula() {
        echo "<p>*** ".$this->getNome()." corrigiu as provas. ***";}}
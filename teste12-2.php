<?php
require_once './teste12-1.php';

 class Luta {
     
     // Atributos
           
     private $desafiado;
     private $desafiante;
     private $rounds;
     private $aprovada;
     
     // Metodos Publicos
     
     public function marcarLuta($l1, $l2){
         if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2 ){
             $this->setAprovada(TRUE);
             $this->setDesafiado($l1);
             $this->setDesafiante($l2);            
         }else {
             $this->setAprovada(FALSE);
             $this->setDesafiado(NULL);
             $this->setDesafiante(NULL);
         }
     }
     
     public function lutar(){
         if ($this->getAprovada()){
             $this->desafiado->apresentar();
             $this->desafiante->apresentar();
             $vencedor = rand(0, 2);
             switch ($vencedor){
                 case 0: // empate
                     echo "<p>Empatou a luta !</p>";
                     $this->desafiado->empataLuta();
                     $this->desafiante->empataLuta();
                     break;
                 case 1: // Desafiado vence
                     echo "<p>".$this->desafiado->getNome()." venceu a luta</p>";
                     $this->desafiado->ganhaLuta();
                     $this->desafiante->perdeLuta();                         
                     break;
                 case 2: // Desafiante vence
                     echo "<p>".$this->desafiante->getNome()." venceu a luta</p>";
                     $this->desafiante->ganhaLuta();
                     $this->desafiado->perdeLuta();
                     break;                 
             }
         }
         else{
             echo "<p>Luta não pode acontecer !</p>";
         }
         
         
     }
     
     // Metodos Especiais
     
     function getDesafiado() {
         return $this->desafiado;
     }

     function getDesafiante() {
         return $this->desafiante;
     }

     function getRounds() {
         return $this->rounds;
     }

     function getAprovada() {
         return $this->aprovada;
     }

     function setDesafiado($desafiado) {
         $this->desafiado = $desafiado;
     }

     function setDesafiante($desafiante) {
         $this->desafiante = $desafiante;
     }

     function setRounds($rounds) {
         $this->rounds = $rounds;
     }

     function setAprovada($aprovada) {
         $this->aprovada = $aprovada;
     }
 }
?>
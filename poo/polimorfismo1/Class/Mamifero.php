<?php
require_once 'Animal.php';
class Mamifero extends Animal{
   private $corDePelo;

   public function locomover(){
        echo"Correndo";
   }
   //--------------------------
   public function getCorPelo(){
       return $this->corDePelo;
   }
   //---------------------------
   public function setCorPelo($c){
       $this->corDePelo=$c;
   }
}
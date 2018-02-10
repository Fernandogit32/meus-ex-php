<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;

    //-------------------metodos-----------
    public function renovarBolsa(){
        echo"<p>Bolsa renovada</p>";
    }
    public function pagarMensalidade(){
        echo"Pagando Mensalidade para aluno bolsista com desconto ".$this->getNome();
    }
    //-------------metodos especiais-------
    public function getBolsa(){
        return $this->bolsa;
    }
    //-------------------------------------
     public function setBolsa($b){
         $this->bolsa=$b;
     }

}
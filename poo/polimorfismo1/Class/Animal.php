<?php
abstract class Animal{
    protected $nome;

    public function locomover(){
        echo "movimentando";
    }
//--------------------------------
   public function getNome(){
        return $this->nome;
    }
    public function SetNome($n){
        $this->nome=$n;
    }
   
}
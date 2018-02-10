<?php

abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
//-----------------------metodo------------
    public final function fazerAniversario(){
       $this->idade ++;
    }
//----------------------metodos especiais----
public function getNome(){
    return $this->nome;
}
public function getIdade(){
    return $this->idade;
}
public function getSexo(){
    return $this->sexo;
}
//-------------------------------------------
public function setNome($n){
    $this->nome=$n;
}
public function setIdade($i){
    $this->idade=$i;
}
public function setSexo($s){
    $this->sexo=$s;
}
}
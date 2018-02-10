<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
private $matricula;
private $curso;

//--------------------metodos------------
public function pagarMensalidade(){
    echo"Pagando Mensalidade de ".$this->getNome();
}
//------------------metodos especiais-----
public function getMatricula(){
    return $matricula;
}
public function getCurso(){
    return $curso;
}
//-------------------------------------------
public function setMatricula($m){
$this->matricula=$m;
}
public function setCurso($c){
$this->curso=$c;
}



}
<?php
require_once 'Pessoa.php';
class Gafanhotos extends Pessoa{
    private $login;
    private $totAssistido;

    function vioMaisUm(){
        $this->totAssistido ++;
    }

    public function __construct($nome,$idade,$sexo,$login){
        parent::__construct($nome,$idade,$sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);

    }

    //----------------
    function getLogin(){
        return $this->login;
    } 
    function getTotAssistido(){
        return $this->totAssistido;
    } 
    function setLogin($l){
        $this->login=$l;
    }
    function setTotAssistido($t){
        $this->totAssistido=$t;
    }
}

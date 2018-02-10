<?php
abstract class Pessoa{

    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;  
    
    public function __construct($n,$i,$s){
           $this->setNome($n);
           $this->setIdade($i);
           $this->setSexo($s);
           $this->setExperiencia(0);
    }
     
    public function ganharExp($n){
        $this->experiencia=$n;
    }

    function getNome(){
        return $this->nome;
    }
    function getIdade(){
        return $this->idade;
    }
    function getSexo(){
        return $this->sexo;
    }
    function getExperiencia(){
        return $this->experiencia;
    }

    function setNome($n){
        $this->nome=$n;
    }
    function setIdade($i){
        $this->idade=$i;
    }
    function setSexo($s){
        $this->sexo=$s;
    }
    function setExperiencia($e){
        $this->experiencia=$e;
    }
    
    
    
}
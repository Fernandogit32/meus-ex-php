<?php


class Lutador {
    private $nome;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //------------------metodos-------------
    public function empatarLuta(){
      $this->empates=getEmpates()+1;
    }
    public function perderLuta(){
        $this->derrotas=getDerrotas()+1;
    }
    public function ganharLuta(){
        $this->vitorias=getVitorias()+1;
    }
    //------------------metodos especiais----------
    
    public function __construct($n,$p,$v,$d,$e){
            $this->setNome($n); 
            $this->setPeso($p);
            $this->setVitoria($v);
            $this->setDerrotas($d);
            $this->setEmpates($e);
             
    }
                             //set//
   public function setNome($n){
        $this->nome=$n;
    }
    //----------------------------------------
    public function setPeso($p){
        $this->peso=$p;
       $this->setCategoria();
    }
    //----------------------------------------
    public function setCategoria(){
        if($this->peso<=70){
            $this->categoria="peso leve";            
        }elseif($this->peso<=80){
            $this->categoria="peso medio";   
        }else{
            $this->categoria="peso pesado";
        }
    }
    //----------------------------------------
    public function setVitoria($v){
        $this->vitorias=$v;
       
    }
    //-----------------------------------------
   public function setDerrotas($d){
        $this->derrotas=$d;
       
    }
    //----------------------------------------
    public function setEmpates($e){
        $this->empates=$e;
       
    }
                         //get
    public function getNome(){
        return $this->nome;
    } 
    //---------------------------------------------
    public function getPeso(){
        return $this->peso;
    } 
    //------------------------------------------- 
    public function getCategoria(){
        return $this->categoria;
    }
    //--------------------------------------------     
    public function getVitorias(){
        return $this->vitorias;
    } 
    //----------------------------------------------  
    public function getDerrotas(){
        return $this->derrotas;
    } 
    //----------------------------------------------                 
    public function getEmpates(){
        return $this->empates;
    }  
}
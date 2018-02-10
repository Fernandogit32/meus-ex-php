<?php
require_once 'controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    //metodos especiais//

    
        
    
    public function __construct(){
       $this->setVolume(50);
       $this->setLigado(FALSE);
       $this->setTocando(FALSE);
    }

    public function getVolume(){
        return $this->volume;
    }
    public function setVolume($v){
        $this->volume=$v;
    }
    public function getLigado(){
        return $this->ligado;;
    }
    public function setLigado($l){
        $this->ligado=$l;
    }
    public function getTocando(){
        return $this->tocando;;
    }
    public function setTocando($t){
        $this->tocando=$t;
    }

    public  function ligar(){
    $this->setLigado(TRUE);
    }
    public  function desligar(){
        $this->setLigado(FALSE);
    }
    public  function abrirMenu(){
        echo"Esta ligado? ".($this->getLigado()?"Sim":"Nao");
        echo"<br />";
        echo"Esta tocando? ".($this->getTocando()?"Sim":"Nao");
        echo"<br />";
        echo"Volume: ".($this->getVolume())."<br />";
        for($i=0; $i < $this->getVolume();$i+=10){
            echo"|";
        }
        echo"<br />";
    }
    public  function feixarMenu(){
           echo "<br />Feixando menu...";
    }
    public  function maisVolume(){
        if($this->getLigado()==TRUE){
            $this->setVolume($this->getVolume()+5);
        }

    }
    public  function menosVolume(){
        if($this->getLigado()==TRUE){
            $this->setVolume($this->getVolume()-5);
        }
    }
    public  function ligarMudo(){
        if($this->getLigado()==TRUE&&$this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public  function desligarMudo(){
        if($this->getLigado()==TRUE&&$this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public  function play(){
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(TRUE);
        }
    }
    public  function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(FALSE);
        }
    }

}

?>
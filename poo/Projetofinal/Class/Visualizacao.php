<?php
require_once 'Video.php';
require_once 'Gafanhotos.php';

class Visualizacao{
    private $espectador;
    private $filme;

    public function __construct($espectador,$filme){
       $this->espectador=$espectador;
       $this->filme=$filme;
       $this->filme->setViews($this->filme->getViews()+1);
       $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
       
    }

    public function avaliar(){
        $this->filme->setAvaliacao($this->filme->getAvaliacao()+1);
    }
    public function avaliarNota($nota){
          $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($por){

    }

    public function getEspectador(){
        return $this->espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setEspectador($e){
        $this->espectador=$e;
    }
    public function setFilme($f){
          $this->filme=$f;
    }

}
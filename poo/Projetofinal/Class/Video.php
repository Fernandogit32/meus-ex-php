<?php
require_once 'Interface/acoesVideo.php';
class Video implements acoesVideo{
    private $titulo;
    private $avaliacoes;
    private $views;
    private $curtidas;
    private $reproduzindo;

    function play(){
     $this->reproduzindo=TRUE;
    }
    function pause(){
        $this->reproduzindo=FALSE;
    }
    function like(){
        $this->curtidas ++;
    }

    // especiais
    

    function gettitulo(){
        return $this->titulo;
    } 
    function getAvaliacao(){
        return $this->avaliacoes;
    }
    function getViews(){
        return $this->views;
    }
    function getCurtidas(){
        return $this->curtidas;
    }
    function getReproduzindfo(){
        return $this->reproduzindo;
    }
    function setTitulo($t){
        $this->titulo=$t;
    }
    function setAvaliacao($a){
        $this->avaliacoes=$a;
    }
    function setViews($v){
        $this->views=$v;
    }
    function setCurtidas($c){
        $this->curtidas=$c;
    }
    function setReproduzindo($r){
        $this->reproduzindo=$r;
    }
}
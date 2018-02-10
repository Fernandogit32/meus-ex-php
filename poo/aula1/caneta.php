<?php

class caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;


    function rabiscar(){
        
        if($this->tampada==TRUE){
            echo"<p>erro não rabiscado</p>";
        }else{
            echo"<p>rabiscando</p>";
        }
            
    }




    function tampar(){
$this->tampada=TRUE;
    }


    function destampar(){
$this->tampada=FALSE;
    }
}
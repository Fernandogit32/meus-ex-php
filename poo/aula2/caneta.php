<?php

class caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


  public function rabiscar(){
        
        if($this->tampada==TRUE){
            echo"<p>erro não rabiscado</p>";
        }else{
            echo"<p>rabiscando</p>";
        }
            
    }




  public  function tampar(){
$this->tampada=TRUE;
    }


  public  function destampar(){
$this->tampada=FALSE;
    }
}

?>
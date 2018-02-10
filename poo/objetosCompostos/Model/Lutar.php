<?php

include_once 'Model/Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $lutar;
    private $aprovada;

    public function marcar($l1,$l2){
            if($l1->getCategoria()===$l2->getCategoria()&& $l1!=$l2){
                $this->aprovada=TRUE;
                $this->desafiado=$l1;
                $this->desafiante=$l2;

            }else{
                
                $this->aprovada=FALSE;
                $this->desafiado=NULL;
                $this->desafiante=NULL;
            }
        
    }
}
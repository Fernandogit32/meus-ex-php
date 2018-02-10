<?php

class Conta{
    public $numeroConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;  
    
   
    
//---------------------------//-------------------
public function abrirConta($t){
    $this->setTipo($t);
      if($this->gettipo()=="cc"){
          $this->saldo=50;
          $this->status=TRUE;
      }elseif($this->tipo=="cp"){
          $this->saldo=150;
          $this->status=TRUE;
      }else{
          echo "<p>imposivel abrir conta pois conta não existe</p>";
      }  
}
//--------------------------------------------------
public function fexarConta(){
        if($this->getsaldo()>0){
            echo "<p>não foi possivel o encerramento da conta pois ainda ha dinheiro</p>";
        }elseif($this->getsaldo()<0){
           echo "<p>não foi possivel o encerramento da conta pois sua conta esta com debito negativo</p>";
        }else{
            $this->status=false;
            echo "<p>conta fexada com sucesso</p>";
        }
}
//--------------------------//---------------------
public function depositar($dep){
        if($this->getStatus()==true){
            $this->setSaldo($this->getsaldo()+$dep);            
        }else{
            echo "<p>impossivel depositar pois a conta esta fexada</p>";
        }
}
//--------------------------//--------------------
public function sacar($sac){
    if($this->getsaldo()>0){
        if($sac<=$this->getsaldo()){
           $this->setSaldo($this->getsaldo()-$sac);
           echo "<p>saque de R$$sac realizado na conta de ".$this->getDono()."</p>";
        }else{
            echo"<p>saque é maior que a quantidade disponivel</p>";
        }
    }else{
        echo "<p>conta sem dinheiro</p>";
    }

}
public function pagarMensali(){
    if($this->getTipo()=="cc"){
        $v=12;
        echo "<p>menssalidade de $v debitada na conta de ".$this->getDono()."</p>";
    }elseif($this->getTipo()=="cp"){
        $v=20;
        echo "<p>menssalidade de $v debitada na conta de ".$this->getDono()."</p>";        
    }if($this->getStatus()==TRUE){
        $this->setSaldo($this-> getsaldo()-$v);
    }else{
        echo"<p>poblemas com a conta não posso cobrar</p>";
    }
    
}
//----------------------------Metodos especiais---------------------------

public function __construct(){        
    $this->setSaldo(0);
    $this->setStatus(FALSE);
    echo "<p>Conta criada com sucesso!</p>";
  }
//-------------------------//---------------------
public function getNumeroDaConta(){
        return $this->numeroConta;
    }


//-----------------------------//---------------------
    public function setNumeroDaConta($n){
    $this->numeroConta=$n;
    }
//-----------------------------//----------------------
public function getTipo(){
    return $this->tipo;
}

public function setTipo($t){
$this->tipo=$t;
}
//---------------------------------//-------------------
public function getDono(){
    return $this->dono;
}

public function setDono($d){
$this->dono=$d;
}
//-------------------------------------------//-----------
public function getsaldo(){
    return $this->saldo;
}
public function setSaldo($s){
$this->saldo=$s;
}

//----------------------------------------//-----------------
public function getStatus(){
    return $this->status;
}
public function setStatus($sta){
$this->status=$sta;
}

}
?>
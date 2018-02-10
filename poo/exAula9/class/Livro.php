<?php
require_once 'interface/publicacao.php';
require_once 'class/Pessoa.php';
class Livro implements Publicacao{
    private $titulo;
    private $totalDePaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    //-----------------metodos-----------------
    public function detalhes(){
        echo "<p>Titulo - ".$this->titulo."</p>";
        echo "<p>Total de paginas - ".$this->totalDePaginas."</p>";
        echo "<p>Pagina atual - ".$this->paginaAtual."</p>";
        echo "<p>O livro esta - ".$this->aberto."</p>";
        echo "<p>O leitor é - ".$this->leitor->getNome()."</p>";
    }
    public function abrir(){
       $this->setAberto(TRUE);         
    }   
    public function fecar(){
        $this->setAberto(FALSE); 
    }
    public function folhar($p){
        if($p<$this->getTotaldePaginas()){
            $this->setPaginaAtual($p);
        }
    }
    public function avancarPag(){
        if($this->getTotaldePaginas()>$this->getPaginaAtual()){            
            $this->setPaginaAtual($this->getPaginaAtual()+1);
        }else{
            echo "não foi possivel";
        }
    }
    public function voltarPag(){
        if($this->getPaginaAtual()>0){
            $this->setPaginaAtual($this->getPaginaAtual()-1);
        }
    }
    //--------------------metodos especiais-------
    public function __construct($t,$to){
      $this->setTitulo($t);
      $this->setTotaldePaginas($to);
      $this->setPaginaAtual(0);
      $this->setAberto(FALSE);
    }

    public function getTitulo(){
      return $this->titulo;
    }
    public function getTotaldePaginas(){
        return $this->totalDePaginas;
    }
    public function getPaginaAtual(){
        return $this->paginaAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
      public function getLeitor(){
        return $this->leitor;
    }

    public function setTitulo($t){
        $this->titulo=$t;
    }
    public function setTotaldePaginas($to){
        $this->totalDePaginas=$to;
    }
    public function setPaginaAtual($pa){
        $this->paginaAtual=$pa;
    }
    public function setAberto($a){
        $this->aberto=$a;
    }
    public function setLeitor($l){
        $this->leitor=$l;
    }
  

   
}
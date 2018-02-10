<?php 

interface Publicacao{

    public function abrir();    
    public function fecar();
    public function folhar($p);
    public function avancarPag();
    public function voltarPag();

}
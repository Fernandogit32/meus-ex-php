<?php
require_once 'Animal.php';
class Mamifero extends Animal{
protected $corpelo;

public function emitirSom(){
    echo "<p>som mamifero</p>";
}
}
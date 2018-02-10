<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php
require_once 'conta.php';
$p1=new Conta();
$p2=new Conta();
$p1->abrirConta("cc");
$p1->setDono("jubileu");
$p1->setNumeroDaConta("111");
$p2->abrirConta("cp");
$p2->setDono("creusa");
$p2->setNumeroDaConta("222");
$p1->depositar(300);
$p2->depositar(500);
$p1->sacar(50);
$p2->sacar(50);
$p1->pagarMensali();
$p2->pagarMensali();
$p1->sacar(288);
$p2->sacar(580);
$p1->fexarConta();
$p2->fexarConta();
print_r($p1);
print_r($p2);


?>
</pre>


    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encapsulamento</title>
</head>
<body>
<pre>
<?php
require_once 'controleRemoto.php';

$c = new ControleRemoto;
$c->ligar();
$c->maisVolume();
$c->ligarMudo();
$c->desligarMudo();
$c->play();
$c->pause();
$c->abrirMenu();


?>
 </pre>   
</body>
</html>
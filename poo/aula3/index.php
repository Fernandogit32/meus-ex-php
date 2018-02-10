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
require_once 'caneta.php';
$c1=new Caneta("novo",1.5);

print "Eu tenho uma caneta com o modelo {$c1->getModelo()} e com ponta {$c1->getPonta()}";

   ?> 
   </pre>
</body>
</html>
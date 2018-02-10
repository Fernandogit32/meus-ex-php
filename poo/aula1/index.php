
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aula 2</title>
</head>
<body>

<?php
require_once 'caneta.php';

$c1=new caneta;
$c1->cor="Azul";
$c1->ponta=0.5;
$c1->tampada=FALSE;
$c1->tampar();

$c1->rabiscar();
print_r($c1);
?>
   
</body>
</html>
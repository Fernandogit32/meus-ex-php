<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$numero1=isset($_GET[n1])?$_GET[n1]:0;
$numero2=isset($_GET[n2])?$_GET[n2]:0;
$op=isset($_GET[op])?$_GET[op]:"Falha Nenhuma opção escolhida";

switch($op){
case 1:
$r=$numero1*$numero2;    
echo $r;
break;

case 2:
$r=$numero1+$numero2;    
echo $r;
break;

case 3:
$r=$numero1/$numero2;    
echo $r;
break;

case 4:
$r=$numero1-$numero2;    
echo $r;
break;

default:
echo "falha";

}

?>
    
</body>
</html>
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

 function soma1($x){
   $x+=2;
   echo "o valor de x é $x<br />";           //parametro sem referencia
 }
$y=5;
 echo soma1($y);
echo "O valor de y é $y";

echo "<hr>";

function soma2(&$a){

  $a+=2;
  echo "o valor de a é $a<br />";                //parametro com referencia

}

$b=5;
echo  soma2($b);
echo "o valor de b é $b"
?>


  
  
  

 
</body>
</html>
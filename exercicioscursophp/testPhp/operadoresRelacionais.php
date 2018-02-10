<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores logicos</title>
</head>
<body>

<?php

$n1=$_GET["a"];
$n2=$_GET["b"];
$tipo=$_GET["op"];

echo "Os valores passados foram $n1 e $n2";

$resp=($tipo=="s")? $n1+$n2:$n1*$n2;

echo "<br />o resultado foi $resp";

echo "<hr>";

$media=($n1+$n2)/2;

echo "a media entre $n1 e $n2 é $media";

$sit=($media<6)?"Aluno reprovado":"Aluno aprovado";

echo "<br />Asituação do aluno é $sit"

?>
    
</body>
</html>
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
$vetor=array("fernando","pedro",array(1,array(1,2,3),2,3),"marcos","paulo",5);
print_r($vetor);
//array_pop($vetor)  esta função elimina o ultimo elemento do vetor
echo "<hr>";
array_unshift($vetor,333);//coloca um elemento no incio do vetor

print_r($vetor);

echo "<hr>";
array_shift($vetor);//retira o primeiro elemento do vetor
print_r($vetor);

echo "<hr>";
sort($vetor);//colocar os valores do vetor em ordem crescente se vc quiser de forma reversa usa-se o rsort();
print_r($vetor);//se vc utilizar o asort() ele mexe todos elementos inclusive os indces  e arsort() mexe os dois mais de modo reverso
//ksort(); isso coloca os indices todos em ordem, e para forma reversa de indce use krsort();
?>
 </pre> 
 
 
</body>
</html>
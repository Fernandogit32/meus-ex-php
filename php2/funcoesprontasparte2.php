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
$nome="FERNANDO VIEIRA";
echo "$nome<br />";
$minus=strtolower($nome); //função deixa tota a string com letras minuscula 
echo $minus;              //para deixar tudo maiuscula uso a função str toupper();

echo"<hr>";
$nome2="fernando vieira";
$primaiusc=ucfirst($nome2);//função deixa apenas a primeira letra maiuscula as outras letras continuam como estão;
print($primaiusc);

echo"<hr>";
$nome3="fernando vieira";
$Pmaius=ucwords($nome3);//função deixa  a primeira letra de cada palavra maiuscula;
print($Pmaius);


echo"<hr>";
$nome4="fernando vieira";
$contrario=strrev($nome4);//função deixa  a string de traz para frente;
print($contrario);

echo"<hr>";
$farse="estou estudando PHP";
$posi=strpos($farse,"PHP");//motra a posição q a palavra esta na prase contando cada caracter
echo"a palavra PHP foi encontrada na posição $posi"; //para a função ignorar maiusculas e minusculas basta untilizar a função stripos()

echo"<hr>";
$nome5="só o php é php blz";
$encontra=substr_count($nome5,"php");
print($encontra);
echo"<hr>";

$site="curso em video";
$sub=substr($site,0,5); //com esses  parametros apartir do valor 0 ele vai pegar até a quinta letra para testar mude  os parametros
echo $sub;

echo"<hr>";
$input = "Alien";
print str_pad($input, 10);                      // produz "Alien     "
print str_pad($input, 10, "-=", STR_PAD_LEFT);  // produz "-=-=-Alien"  //observação codigo não funcionou direito
print str_pad($input, 10, "_", STR_PAD_BOTH);   // produz "__Alien___"
print str_pad($input, 6 , "___");   

echo"<hr>";     
$nome6="php";
$repetir=str_repeat($nome6,10); //função repete o valor da variavel quantas vezes for passado no parametro
print($repetir);

echo"<hr>"; 
$nome7="Gosto de estudar php e php";
$subistitui=str_replace("php","matematica",$nome7); //neste caso esta função esta substituindo todas as palavras php da string por matematica
print($subistitui);








?>
    
</body>
</html>
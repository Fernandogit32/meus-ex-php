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

$produto="Leite";
$preco=4.5;

printf("O %s esta custando R$%.2f<br />",$produto,$preco);
//%s para uma string 
//%f para um valor real
//%d para um valor decimal(positivo ou negativo)
//%u valorer decimal sem sinal (apenas numeros positivos)
//%r mostra detalhes da variavel


//primeira forma de criar vetor
$v[0]=1;
$v[1]=2;
$v[2]=3;

print_r($v);

//segunda forma de criar vetor
$v2=array(1,2,2,3,6);
echo "<br />";
print_r ($v2);

//var_dump(); função substitui o print_r
//var_export(); função substitui o print_r

echo "<br />";
echo "<hr>";

$texto="meu nome é fernando e eu tenho 29 anos de idade";
$q=wordwrap($texto, 10, "<br />\n", false); //com false ele só quebra palavras com menos de 10 letras nesse caso
// se for colocado verdadeiro ele quebra na quantidade de letras exatas msm que esteja no meio da palavra.
echo $q;



echo"<hr>";
$test1="123456789";
$qtd=strlen($test1);//função que mostra a quantidade de caracteres de uma string

echo "<br />$qtd";

echo "<br />";
echo "<hr>";

$tiraspaco="   fernando   vieira  ";

echo(strlen($tiraspaco));
echo"<br />";
echo (trim($tiraspaco));//tira o ecesso de espaços
echo"<br />";
echo"<hr>";
$novo=trim($tiraspaco);
echo (strlen($novo));

echo"<hr>";

$frase="ola meu nome é fernando";
$cont=str_word_count($frase,1);//se eu colocar 1 ele cria um vetor e guarda cada palavra em um indice
print_r($cont);                               //0 ele mostra a quantidade de palavras
                                              //2cria um vetor mantendo o posicionamento de cada palavra dentro da string


echo "<hr>";
$frase2="meu/mundo/minha/vida";
$quebrada=explode("/",$frase2);//comando explode quebra a string a partir do caracter especificado dentro das aspas
print_r($quebrada);

echo "<hr>";
$frase3="fernando     12356";
$quebrada2=str_split($frase3);//comando quebra cada caractere
print_r($quebrada2);

echo "<hr>";

$frase4[0]="ola";
$frase4[1]="mundo";
$frase4[2]="loco";
$juntar=implode(" ",$frase4); //junta todas as posisoes do vetor tornando-se uma frase 
print_r($juntar);             //pode-se usar a função join(); tbm no lugar do implode que da no msm

echo "<hr>";

$letra=chr(67);
echo "a letra de codigo 67 é $letra"; //função mostra qual letra do teclado corresponde o codigo digitado

echo "<hr>";
$letra2="C";
$cod=ord($letra2);//funçao Mostra o codigo do teclado q representa a letra digitada
echo $cod;




?>
    
</body>
</html>
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
$n1=2;
$n2=8;
$soma;
echo "a soma é ".($n1+$n2);
?>
<h1>recebendo parametros da url</h1>
<!--?a=4&b=5  colocar como parametro na url para funcionar-->
<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];

echo "<h3>Os valores recebidos são $n1 e $n2 </h3>";
echo "O valor absoluto de $n2 é ".abs($n2);
echo "<br />O valor de $n1<sup>$n2</sup> é " .pow($n1, $n2);
echo "<br />A raiz de $n1 é ".sqrt($n1);
echo "<br />O valor de $n1 arredondado é de " .round($n1);// até 0.4 ele arredonda pra baixo acima arredonda pra cima
echo "<br />O valor de $n1 arredondado é de " .ceil($n1);//sempre arredonda pra cima
echo "<br />O valor de $n1 arredondado é de " .floor($n1);//sempre arredonda pra baixo
echo "<br />Aparte inteira de $n1 é " .intval($n1);
echo "<br />O valor de $n1 em moeda é de R$" .number_format($n1,2,",",".");
?>
<hr>
<?php
$preco=$n1;
echo "O preço do produto é de R$ $preco";
$preco=$preco+($preco*0.10);
echo "<br />O novo preço com 10% de almento sera de R$ $preco";

echo "<br />" .$preco++ ;//pós utilizar variavel
echo "<br />" .$preco ;

echo "<br />" .++$preco ;//pré utilizar variavel
echo "<br />" .$preco ;


?>
    
</body>
</html>
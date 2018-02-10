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
$nome=isset($_GET["nome"])?$_GET["nome"]:"Valor não informado";
$nac=isset($_GET["ano"])?$_GET["ano"]:"Valor não informado";
$sex=isset($_GET["sexo"])?$_GET["sexo"]:"Valor não informado";;

$idade=date("Y")-$nac;
echo "O usuario $nome do sexo $sex tem $idade";

?>
<a href="ex1.html">Voltar</a>
    
</body>
</html>
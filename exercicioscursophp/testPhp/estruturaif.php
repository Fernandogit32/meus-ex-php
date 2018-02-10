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
$ano=isset($_GET[ano])?$_GET[ano]:"Data de nacimento não informado!!!";
$idade = date("Y")-$ano;

if(date("Y")-$ano<18&&date("Y")-$ano>=16){
echo "sua idade é igua a $idade e seu voto é opcional" ;
}elseif(date("Y")-$ano<65&&date("Y")-$ano>=18){
    echo "sua idade é igua a $idade e seu voto é obrigatorio"; 
}elseif(date("Y")-$ano>65){
    echo "sua idade é igua a $idade e seu voto é opcional"; 
}else {
    echo "sua idade é igua a $idade portanto vc não pode votar";
}
?>
    
</body>
</html>
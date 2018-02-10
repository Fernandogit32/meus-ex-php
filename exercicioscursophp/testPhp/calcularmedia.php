<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>

<?php
$nota1=isset($_GET[n1])?$_GET[n1]:0;
$nota2=isset($_GET[n2])?$_GET[n2]:0;

$media=($nota1+$nota2)/2;

if($media>=7){
    echo "O aluno com a media <span>$media</span>  foi aprovado";
}elseif (($media<7)&&($media>=5)){
    echo "O aluno com a media <span>$media</span> esta em recuperação";
}else {
    echo "O aluno com a media <span>$media</span> esta em reprovado";
}


?>
  
</body>
</html>
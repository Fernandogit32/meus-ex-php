<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
$texto=isset($_GET[t])?$_GET[t]:"Texto generico";
$cor=isset($_GET[cor])?$_GET[cor]:"black";
$tamanho=isset($_GET)?$_GET[tam]:"12pt";

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span{
           color: <?php echo $cor;?>;
           font-size: <?php echo $tamanho;?>;
          
          
        }
    </style>
</head>
<body> 


    <?php
    echo "<span>$texto</span>";
    ?>
    
</body>
</html>
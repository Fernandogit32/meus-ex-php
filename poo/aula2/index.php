
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aula 2</title>
</head>
<body>
<pre>
<?php
 
include 'caneta.php';
$c1=new caneta;
$c1->modelo="Bic Cristal";
$c1->tampada=FALSE;
print_r($c1);
?>
</pre>
   
</body>
</html>
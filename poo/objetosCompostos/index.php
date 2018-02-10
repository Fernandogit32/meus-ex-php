<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Objetos Compostos</title>
</head>
<body>
<pre>
<?php
   require_once 'Model/Lutador.php'; 
   require_once 'Model/Lutar.php';
   
   $v[0]=new Lutador('fernando',80,0,0,0);
   $v[1]=new Lutador('leo',80,0,0,0);
  $l= new Luta();
  $l->marcar($v[0],$v[1]); 
  print_r($l);
 

?>
</pre>
    
</body>
</html>

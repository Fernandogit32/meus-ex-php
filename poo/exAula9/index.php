<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex Pessoa le Livros</title>
</head>
<body>
<pre>
       <?php
        require_once 'class/Pessoa.php';        
        require_once 'class/Livro.php';
        $p[0]=new Pessoa('fernando',29,'masculino');
        $l[0]=new Livro('Dragonbal',100);
        $l[0]->setLeitor($p[0]); 
        $l[0]->avancarPag();
        $l[0]->voltarPag();
        $l[0]->abrir();
        
        $l[0]->folhar(80); 

       echo "<hr>";       
       print_r($l[0]);
       $l[0]->detalhes();

 ?>
        </pre>

    
</body>
</html>
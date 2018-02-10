<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php
require_once 'Class/Visitante.php';
require_once 'Class/Aluno.php';
require_once 'Class/Bolsista.php';
//------------VISITANTE----------

  $v= new Visitante();
  $v->setNome('Fernando');
  $v->setIdade(29);
  $v->setSexo('Masculino');
  print_r($v);
  echo"<hr>";
  //---------------------------------

  //-----------------ALUNO-------------
   $a=new Aluno();
   $a->setNome('juca');
   $a->setIdade(21);
   $a->setSexo('Masculino');
   $a->setMatricula(123456789);
   $a->setCurso('Técnico em Informatica');
   $a->pagarMensalidade();
   echo"<br />";
   print_r($a);
   echo"<hr>";
   //--------------------------------------
   $b=new Bolsista();
   $b->setNome('Maria');
   $b->setIdade(14);
   $b->setSexo('Feminino');
   $b->setMatricula(987654321);
   $b->setCurso('ADS');
   $b->setBolsa(12.4);
   print_r($b);
   $b->pagarMensalidade();

?>  
</pre>  
</body>
</html>
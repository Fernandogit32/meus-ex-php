<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polimorfismo sobreposisão</title>
</head>
<body>
    <pre>
    <?php
      require_once 'Class/Mamifero.php';
      $m=new Mamifero();
      $m->setNome('cachorro');
      $m->setCorPelo('branco');   
      print_r($m);
      echo"<br />";
      $m->locomover();


    ?>
    </pre>
</body>
</html>
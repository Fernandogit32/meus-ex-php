<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Final</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Class/Visualizacao.php';
    require_once 'Class/Gafanhotos.php';
    require_once 'Class/Video.php';
    $v=new Video();
    $v->play();
    $v->like();
    $v->setTitulo('html5');
    $v->setAvaliacao(100);
    $v->setViews(10);

    print_r($v);
    echo"<hr>";
    $g=new Gafanhotos('fernando',29,"M","FERNANDO12");
    print_r($g);
    echo"<hr>";
    $visu=new Visualizacao($g,$v);
    $visu->avaliar();
    $visu->avaliarNota(20);
    print_r($visu);


    ?>
    </pre>
    
</body>
</html>
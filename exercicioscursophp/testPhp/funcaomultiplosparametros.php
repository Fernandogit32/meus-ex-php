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
    function soma(){
        $p=func_get_args();
       $t=func_num_args();
       $s=0;     

       for ($i=0; $i < $t; $i++) { 
           
           $s=$s+ $p[$i];          
       }
      return $s;
    }
    echo soma(1,2,7,8);
    ?>
</body>
</html>
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

         $vetor1=range(2,30,4);//cria um vetor que começa com valor 2 vai até 30 pulando de  4 em 4;
         print_r($vetor1);
         echo("<br />");
         foreach($vetor1 as $v){
             print("$v-");
         }

               echo "<hr>";
         $vetor2=array(1,2,3,4);
         print_r($vetor2);
         unset($vetor2[3]);//função bdestroi o elemento na posição desejada do vetor
         echo("<br />");
         print_r($vetor2);


         // array com indices string
         echo "<hr>";
         $vetor3=array("nome"=>"fernando", "idade"=>28,"peso"=>65);
         foreach($vetor3 as $chave=>$valor){
             echo "O indice $chave tem o valor $valor<br />";
         }
         

         //criando uma matriz simples
         echo "<hr>";
         $vetor4=array(5,array(6,8));
         foreach($vetor4[1] as $valor2 ){
         echo "valores da matriz $valor2<br />";
         }
         echo "<hr>";
         print_r($vetor4);
         
    ?>
</body>
</html>
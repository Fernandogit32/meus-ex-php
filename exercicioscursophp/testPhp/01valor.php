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
$recebido= $_GET["v"];
echo "A raiz quadrada do valor recebido foi " .number_format(sqrt($recebido),2);
?>
<a href="aula1form.html">Voltar</a>
</body>
</html>


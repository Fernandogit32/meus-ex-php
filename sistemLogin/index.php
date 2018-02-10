<?php

include_once'setting.php';
@session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<div id="login">
    

<form action="" method="Post" enctype="multipart/form-data">
<h1>Entrar</h1>
    <p><input type="text" name="login" id="login" placeholder="login"></p>    
    <p><input type="password" name="senha" id="senha" placeholder="senha"></p><br />
    <p><input type="submit" value="entrar"></p>
    <p><input type="hidden" name="entrar" value="login"></p>


</form>

<?php
if(isset($_POST['entrar'])&&$_POST['entrar']=="login"){
  $usuario=  $_POST['login'];
  $senha=  $_POST['senha'];
  if(empty($usuario)&&empty($senha)){
      echo"preencha todos os campos";
  }else{
      $query= mysqli_query($conect,"select nome, usuario, senha from pessoas where usuario = '$usuario' && senha = '$senha'");
      $busca=mysqli_num_rows($query);
      $linha=mysqli_fetch_assoc($query);
      if($busca>0){
          $_SESSION['nome']=$linha['nome'];
          $_SESSION['usuario']=$linha['usuario'];
          header('LOCATION: logado.php');
         
      }else{
          echo "senha e usuarios inválidos";
      }
     
  }
}
?>

</div>
    
</body>
</html>

<?php
include_once'setting.php';
@session_start();
$nome= $_SESSION['nome'];
$usuario= $_SESSION['usuario'];

if(!isset($_SESSION['nome']) && !isset($_SESSION['usuario'])){
    header('LOCATION: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bem vindo <?php echo $nome; ?></title>
</head>
<body>

<p>Bem vindo <?php echo $nome; ?> @<strong><?php echo $usuario; ?></strong> <a href="sair.php">Sair</a></p>

<?php?>
    
</body>
</html>
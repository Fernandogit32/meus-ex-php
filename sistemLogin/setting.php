<?php

//dados do servidor

$host="localhost";
$login="root";
$senha="97796978";
$banco="Login";


//efetuando conection
$conect=mysqli_connect($host, $login, $senha,$banco) or print (mysqli_error());




//verificação
if(!mysqli_connect($host, $login, $senha,$banco)){
echo "Erro ao conectar o banco de dados";

}else{
    
}




?>
<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "acessofmap";

$conn= mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Erro de conexão: ".mysqli_connect_error());
}
echo "/nConexão bem sucedida";

?> 

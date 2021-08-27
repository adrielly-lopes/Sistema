<?php
include_once('conexao.php');

$Login = $_POST['login'];
$Senha = $_POST['senha'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO usuarios (Login, Senha) VALUES ('$Login', '$Senha')";

if(mysqli_query($conn, $sql)){
    echo "Dados salvos com sucesso!";
}
else{
    echo "Você já está cadastrado!";
}
?>

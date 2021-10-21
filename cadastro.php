<?php
include_once('conexao.php');

$Nome = $_POST['nome'];
$Email = $_POST['email'];
$Senha = $_POST['senha'];
$Usuario = $_POST['usuario'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO pessoas (Nome, Email, Senha, Usuario) VALUES ('$Nome', '$Email, '$Senha', '$Usuario')";

if(mysqli_query($conn, $sql)){
    echo "Dados salvos com sucesso!";
}
else{
    echo "Você já está cadastrado!";
}
?>

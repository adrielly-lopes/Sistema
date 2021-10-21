<?php
include_once('conexao.php');

$Nome = $_POST['nome'];
$Email = $_POST['email'];
$Pass = md5($_POST['pass']);
$NivelAcesso= $_POST['nivelacesso'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO usuarios (Nome, Email, Pass, NivelAcesso) VALUES ('$Nome', '$Email', '$Pass', '$NivelAcesso')";

if(mysqli_query($conn, $sql)){
    echo "Dados salvos com sucesso!";
}
else{
    echo "Você já fez seu cadastro!";
}
?>

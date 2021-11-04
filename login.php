<?php
include_once('conexao.php');
include_once('cadastro.php');

if (!empty($_POST) AND (empty($_POST['nome']) OR empty($_POST['pass']))) {
    header("Location: index.php"); exit;
}

mysqli_select_db($conn, '$database');
$Nome = mysqli_real_escape_string($_POST['nome']);
$Pass = mysqli_real_escape_string($_POST['pass']);
$Email = mysqli_real_escape_string($POST['email']);
$NivelAcesso = mysqli_real_escape_string($POST['nivelacesso']);
        
$sql = "SELECT `Nome`, `Pass`, `NivelAcesso` FROM `usuarios` WHERE (`Nome` = '".$Nome ."') AND (`Pass` = '". md5($Pass) ."') AND (`NivelAcesso` = '".$NivelAcesso . ")";
$query = mysqil_query($sql);

if(mysqli_num_rows($query) != 1){
    echo "Login inválido!"; exit;
} 
else{
    $resultado = mysqli_fetch_assoc($query);
    if (!isset($_SESSION)) session_start();
    $_SESSION['UsuarioNome'] = $resultado['Nome'];
    $_SESSION['UsuarioNivel'] = $resultado['NivelAcesso'];
    header("Location: restrito.php"); exit;
}

?>

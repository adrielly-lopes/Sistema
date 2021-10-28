<?php
include_once('login.php');

if (!isset($_SESSION)) session_start();
$nivel_necessario = 1;
  
if (!isset($_SESSION['UsuarioNome']) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario)) {
    session_destroy();
    header("Location: login.htmsl"); exit;
}

?>

<h1>Página restrita</h1>
<p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

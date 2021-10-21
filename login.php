<?php
include_once('conexao.php');

mysqli_select_db($conn, '$database');
$query = "SELECT Nome, Pass, NivelAcesso FROM usuarios"; 

if(mysqli_query($conn, $query)){
    $NivelAcesso == 'servidor';
    echo "Vc conseguiu";
}
else{
    echo "Não foi dessa vez";
}

?>

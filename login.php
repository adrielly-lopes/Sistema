<?php
include_once('conexao.php');

mysqli_select_db($conn, '$database');
$query = "SELECT Nome, Pass FROM usuarios"; 

if(mysqli_query($conn, $query)){
    echo "Vc conseguiu";
}
else{
    echo "Não foi dessa vez";
}

?>

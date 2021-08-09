<?php
    require_once 'classe.php';
    $u = new usuario();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Início</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
        <nav>
            <h1>Fundação do Meio Ambiente do Pantanal</h1>
            <ul>
                <li>
                    <br><a href="index.php">Início</a>
                </li>
                <li>
                    <br><a href="cadastro.html">Cadastro</a>
                </li>                
                <li>
                    <br><a href="login.html">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <div>
        <?php

            session_start();            
            if(!isset($_SESSION['ID'])){
                echo "Seja bem vindo ao Sistema da Fundação do Meio Ambiente do Pantanal. <br>";
                echo "As informações só poderão ser acessadas após o login!";
                echo "<br><a href='login.html'><button>Login</button></a>";
            }else{                
                echo "Bem-Vindo, ".$_SESSION['ID']." <br />";
                echo "Essas informações podem ser acessadas por você";
                echo "Todas as informações para o usuário";
                echo "<a href='sair.php'><button>SAIR</button></a>";
            }
        
        ?>
    </div>

    <?php
        include 'footer.php'
    ?>

</body>
</html>

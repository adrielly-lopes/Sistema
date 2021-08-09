<?php 

    require_once 'classe.php';
    $u = new usuario();

    if(isset($_POST['login'])){
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);

        if(!empty($login) && !empty($senha)){
            $u->conectar('sistemafmap','localhost','root',''); 
            echo "$msg";
            if($u->msg == ""){
                if($u->cadastrar($login,$senha)){
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario foi cadastrado com sucesso!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='login.html'</script>";
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario já está cadastrado no sistema!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='cadastro.html';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='cadastro.html';</script>";
        }
    }

?>

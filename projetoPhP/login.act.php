<?php
    include("conexao.php");
    extract($_POST);
    $busca = mysqli_query($con, "select cpf, senha from cliente where cpf = '$cpf'");
    if(mysqli_num_rows($busca) == 1){
        $cliente = mysqli_fetch_array($busca);
        $senha = md5($senha);
        if($cpf == $cliente['cpf'] && $senha == $cliente['senha']){
            session_start();
            $_SESSION['user'] = $cpf;
            echo $_SESSION['user'];
            header("location:IndexRCW.php");
        }else{
            header("location:telaDeLogin.php");
        }
    }else{
        header("location:telaDeLogin.php");
    }
?>
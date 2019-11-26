<?php require('log.req.act.php');?>
<?php
include('conexao.php');

if(isset($_POST['alterar'])){
    extract($_POST);
    mysqli_query($con, "update contato set telefone='$tel', email='$email', celular='$cel' where id_contato=". $_GET['codContato']);
    header("location:telaDeAtualizacao.php?codigo=". $_GET['codCliente']);
}
if(isset($_POST['voltar'])){
    header("location:telaDeAtualizacao.php?codigo=". $_GET['codCliente']);
}
?>
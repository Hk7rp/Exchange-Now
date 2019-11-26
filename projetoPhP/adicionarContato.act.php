<?php require('log.req.act.php');?>
<?php
include('conexao.php');
if(isset($_POST['adicionar'])){
    extract($_POST);
    mysqli_query($con, "insert into contato(email, telefone, celular, id_cliente) values ('$email', '$tel', '$cel', '". $_GET['codCliente']."')");
    header("location:telaDeAtualizacao.php?codigo=". $_GET['codCliente']);      
}
if(isset($_POST['voltar'])){
    header("location:telaDeAtualizacao.php?codigo=". $_GET['codCliente']);
}
?>
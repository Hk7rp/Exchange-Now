<?php require('log.req.act.php');?>
<?php
    include('conexao.php');
    mysqli_query($con, "delete from contato where id_contato = ". $_GET['codContato']);
    header("location:telaDeAtualizacao.php?codigo=". $_GET['codCliente']);
?>
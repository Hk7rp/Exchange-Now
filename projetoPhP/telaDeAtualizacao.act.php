<?php require('log.req.act.php');?>
<?php
    include('conexao.php');
    include('funcao.php');
    if(isset($_POST['enviar'])){
        extract($_POST);
        $foto = $_FILES['foto'];
        if($foto['name'] != ""){
            $end = "fotos/".md5(time().$foto['size']).".jpg";
            move_uploaded_file($foto['tmp_name'], $end);
            echo $foto['name'];
            print_r($foto);
        }else{
            echo"oi";
            $end = $_SESSION['foto'];
        }
        if($cliente = mysqli_query($con, "select nome, cpf, foto, id_cliente from cliente where cpf = '". $_SESSION['user'] ."'")){
            $cliente = mysqli_fetch_array($cliente);
            $comp = mysqli_query($con, "select cpf from cliente where id_cliente = ". $cliente['id_cliente']);
            echo"oi";
            if((mysqli_fetch_array($comp)) || ($cpf == $cliente['cpf'])){
                mysqli_query($con, "UPDATE cliente SET nome='$nome',cpf='$cpf',foto='$end' WHERE id_cliente = ". $cliente['id_cliente']);
                $_SESSION['user'] = $cpf;

                header('location:telaDePerfil.php');
            }else{
                echo"droga..";
            }
        }else{
            echo"aa";
        }
    }
    if(isset($_POST['voltar'])){
        header('location:telaDePerfil.php');
    }
    
?>
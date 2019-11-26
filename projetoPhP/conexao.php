<?php
if(!$con = mysqli_connect("localhost","root","")){
    echo"Falha ao conectar no servidor";
}else{
    if(!mysqli_select_db($con, "projeto")){
        echo"Falha ao carregar a base de dados";
    }
}
mysqli_query($con, "SET NAMES utf8");
?>

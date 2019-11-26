<?php require("req.act.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <title>RainCoat Web</title>
</head>
<body>
    <header class="topo">
        
        <nav class="navbar-expand-lg navbar-light">
            <a href="IndexRCW.php" class="img-logo">
                <img src="smallerraincoat.png">
            </a>
            <div class="collapse navbar-collapse bg-dark" style="float:right;border-radius:100px;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active menus" style="margin: 10px 20px 10px 20px;">
                            <a href="telaDeLogin.php" class="btn btn-outline-success" style="border:none">Login</a>
                        </li>
                    </ul>
            </div>
            <div class="collapse navbar-collapse bg-dark" style="float:right;border-radius:100px;">
           		<ul class="navbar-nav mr-auto">
                    <li class="nav-item active menus">
                        <a href="IndexRCW.php" class="btn btn-outline-info" style="border:none">Página Inicial</a>
                    </li>
                    <li class="nav-item active menus">
                        <a href="telaDeProdutos.php" class="btn btn-outline-info" style="border:none">Produtos</a>
                    </li>
                    <li class="nav-item active menus">
                        <a href="IndexRCW.php#quemSomos" class="btn btn-outline-info" style="border:none">Quem somos</a>
                    </li>
                    <li class="nav-item active menus">
                        <a href="IndexRCW.php#contato" class="btn btn-outline-info" style="border:none">Contatos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="fundo set-bg">
    	<div class="footer-Cadastro">
            <div class="titulo"><strong>Cadastro</strong></div>
            <div class="cadastro">
                <form method="POST" enctype="multipart/form-data">
                    <table>
                        <tr><td>Nome:</td><td><input type="text" name="nome" placeholder="Nome" style="width:400px;"></td></tr>
                        <tr><td>E-mail:</td><td><input type="text" name="email" placeholder="E-mail" style="width:400px;"></td></tr>
                        <tr><td>Cpf:</td><td><input type="text" name="cpf" placeholder="Cpf" style="width:150px;"></td></tr>
                        <tr><td>Telefone:</td><td><input type="text" name="tel" placeholder="Telefone" style="width:150px;"></td></tr>
                        <tr><td>Celular:</td><td><input type="text" name="cel" placeholder="Celular" style="width:150px;"></td></tr>
                        <tr><td>Senha:</td><td><input type="password" name="senha" placeholder="Senha"></td></tr>
                        <input type="file" id="foto" name="foto" style="display: none;">
                        <tr><td>Foto:</td><td><label for="foto" class="opcao">Escolher foto</label></td></tr>
                        <tr><td><button type="submit" name="enviar" class="botaoForm" style="margin-top:25px; margin-bottom:20px">Cadastrar</button></td><td><?php echo pagCadastro();?></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
    <?php
        function pagCadastro(){
            include('conexao.php');
            include('funcao.php');
            if(isset($_POST['enviar'])){
                extract($_POST);
                $foto = $_FILES['foto'];
                $end = "fotos/".md5(time().$foto['size']).".jpg";
                move_uploaded_file($foto['tmp_name'], $end);

                $busca = mysqli_query($con, "select cpf from cliente where cpf = '$cpf'");
                if(!mysqli_fetch_array($busca)){
                    return cadastroCliente($con, $nome, $cpf, $senha, $end, $email, $tel, $cel);
                }else{
                    return "<strong style='color: red;'>Conta existente</strong>";
                }
            }
        }
    ?>
</body>
</html>
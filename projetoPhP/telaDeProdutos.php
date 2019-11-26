<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
<link rel="stylesheet" href="estilos.css">

<title>RainCoat Web</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</head>

<body>
<?php
include('conexao.php');
include('funcao.php');
?>


    <header class="topo">
        
        <nav class="navbar-expand-lg navbar-light">
            <a href="IndexRCW.php" class="img-logo">
                <img src="smallerraincoat.png">
            </a>
            <div class="collapse navbar-collapse bg-dark" style="float:right;border-radius:100px;">
                <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                        echo "
                        <ul class='navbar-nav mr-auto'>
                            <li class='nav-item active menus' style='margin: 10px 5px 10px 20px;'>
                                <a href='telaDeLogin.php' class='btn btn-outline-success' style='border:none'>Entrar</a>
                            </li>
                            <li class='nav-item active menus' style='margin: 10px 20px 10px 5px;'>
                                <a href='telaDeCadastro.php' class='btn btn-outline-warning' style='border:none'>Cadastro</a>
                            </li>
                                
                        </ul>
                        ";
                    }else{
                        echo "
                        <ul class='navbar-nav mr-auto'>
                            <li class='nav-item active menus' style='margin: 10px 5px 10px 20px;'>
                                <a href='logout.act.php' class='btn btn-outline-danger' style='border:none'>Sair</a>
                            </li>
                            <li class='nav-item active menus' style='margin: 10px 20px 10px 20px;'>
                                <a href='telaDePerfil.php' class='btn btn-outline-light' style='border:none'>Perfil</a>
                            </li>
                        </ul>
                        ";
                    }
                ?>
                    
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
                        <a href="#quemSomos" class="btn btn-outline-info" style="border:none">Quem Somos</a>
                    </li>
                    <li class="nav-item active menus">
                        <a href="#contato" class="btn btn-outline-info" style="border:none">Contatos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <section class="fundo set-bg">
        <div class="box2" style="float:none; margin:150px auto;">
            <div class="central">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            selectProd($con, "sapato");
                        ?>
                    </div>
                </div>
            </div>  
                        <!--  PHP -->
            <div class="central">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            selectProd($con, "blusa");
                        ?>
                    </div>
                </div>
            </div>
            <div class="central">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- PHP -->
                        <?php
                            selectProd($con, "calca");
                        ?>
                        <!-- PHP -->
                        
                    </div>
                </div>
            </div>
            <div class="central">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- PHP -->
                        <?php
                            selectProd($con, "chapeu");
                        ?>
                        <!-- PHP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
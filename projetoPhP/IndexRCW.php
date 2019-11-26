<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
<link rel="stylesheet" href="estilos.css">

<title>RainCoat Web</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body>

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
    	<div class="container h-100" style="margin-top:200px">
        	<div class="container2 text-white">
            	<div class="row" style="float:left">
                	<div class="col-lg-6 pr-0">
                    	<h2>Excharge Now</h2>
                        <p>O presente projeto tem por finalidade otimizar e facilitar o manuseio administrativo da loja,além do
                            manuseio dos clientes que possuem acesso ao site da loja.</p>
                    </div>
                
                </div>
            	<div class="logo2">
                	<img src="halfcoat.png">
                
                </div>
            </div>
        </div>
    </section>
    

    <a name="quemSomos"><section class="selection-padding gray-bg" tabindex="-1">
    		<div class="container">
        		<div class="row">
            		<div class="col-sm-6 offset-3 text-center">
                		<div class="page-title">
                    		<h2>RainCoders</h2>
                        	<p>Fundadores e suas funções na RainCoat</p>
                    	</div>
                	</div>
            	</div>
            	<div class="row" style="height:350px;">
                	<div class="col-xs-12 classHover">
                		<div class="single-team">
                    		<div class="foto">
                        		<img src="RainCoders/1davi.png" alt><div class="col-xs-12">
                        	</div>
                        	<h2>Davi Nilson</h2>
                       	 	<p>Designer</p>
                    	</div>
            		</div>
				</div>
            	<div class="col-xs-12 classHover">
                    <div class="single-team">
                        <div class="foto">
                            <img src="RainCoders/2joao.png" alt><div class="col-xs-12">
                        </div>
                        <h2>João Pedro</h2>
                        <p>Administrador de Banco de Dados (Dba)</p>
                    </div>
                </div>
            </div>
                <div class="col-xs-12 classHover">
                    <div class="single-team">
                        <div class="foto">
                            <img src="RainCoders/3pedro.png" alt><div class="col-xs-12">
                        </div>
                        <h2>Pedro Henrique</h2>
                        <p>Programador</p>
                    </div>
                </div>
        	</div>
            <div class="col-xs-12 classHover">
				<div class="single-team">
                	<div class="foto">
                    	<img src="RainCoders/4taylor.png" alt><div class="col-xs-12">
					</div>
                    <h2>Taylor Gabriel</h2>
                    <p>Programador sênior</p>
                </div>
            </div>
		</div>
        <div class="col-xs-12 classHover">
				<div class="single-team">
                	<div class="foto">
                    	<img src="RainCoders/5wesley.png" alt><div class="col-xs-12">
					</div>
                    <h2>Wesley Souza</h2>
                    <p>Gestor</p>
                </div>
            </div>
		</div>
    </div>
   	</div>
	</section></a>
    
    <section class="footer-area">
    	<div class="absolute footer-bg"></div>
    	<div class="footer-top">
        	<div class="container3">
            	<div class="row">
                    <div class="col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title" style="color:#000">
                            <a name="contato"><h2>contato</h2></a>
                            <p>Quais são as novidades? Entre em contato conosco, estamos a espera do seu feedback!</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                	<div class="col-xs-12-2 col-md-4">
                    	<address class="side-icon-boxes">
                        	<div class="side-icon-box">
                            	<div class="side-icon">
                                	<img src="icones/blue_marker.png" alt="">
                                </div>
                                <p>
                                	<strong>Endereço:</strong><br>
                                    R. Virgínia Ferni, 400
                                    <br>
                                    SP
                                </p>
                            </div>
                            <div class="side-icon-box">
                            	<div class="side-icon">
                                	<img src="icones/blue_phone.png" alt="">
                                </div>
                                <p>
                                	<strong>Telefone:</strong><br>
                                    (11) 2521-8188
                                    <br>
                                    (11) 99440-0064
                                </p>
                            </div>
                            <div class="side-icon-box">
                            	<div class="side-icon">
                                	<img src="icones/blue_mail.png" alt="">
                                </div>
                                <p>
                                	<strong>Email:</strong><br>
                                    raincsix@gmail.com
                                    <br>
                                    hkrpedro@gmail.com
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12-2 col-md-8">
                    	<form action="" method="post" id="feedback_form" class="contact-form">
                        	<div class="form-double">
                            	<input type="text" name="feedNome" id="feedNome" placeholder="Nome" class="form-control" style="margin-bottom:25px" required>
                                <input type="email" name="feedEmail" id="feedEmail" placeholder="Endereço de Email" class="form-control" style="margin-bottom:25px" required>
                            </div>
                            <input type="text" name="feedTopico" id="feedTopico" placeholder="Tópico" class="form-control" style="margin-bottom:25px">
                            <textarea name="mensagem" id="mensagem" class="form-control" rows="5" placeholder="Digite sua mensagem" style="margin-bottom:25px"></textarea>
                            <button type="submit" class="botaoForm" style="margin-bottom:25px">Enviar</button>
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="footer-midle">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12-2 col-sm-6">
                    	<p class="pMeio">
                        Acesse nossas páginas e fique por dentro das novidades!!
                        </p>
                    </div>
                    <div class="col-xs-12-2 col-sm-6 pull-rigth">
                    	<ul class="social-menu text-right x-left">
                        	<li>
                            	<a href="#">
                                	<img src="icones/blueborded_F.png">
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<img src="icones/blueborded_bird.png">
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<img src="icones/blueborded_mail.png">
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<img src="icones/blueborded_marker.png">
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<img src="icones/blueborded_phone.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12-2 text-center">
                    	<p>©RainCoat Web 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

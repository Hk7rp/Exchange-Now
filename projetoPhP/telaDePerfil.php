<?php require('log.req.act.php');?>
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
				<ul class='navbar-nav mr-auto'>
					<li class='nav-item active menus' style='margin: 10px 20px 10px 20px;'>
						<a href='logout.act.php' class='btn btn-outline-danger' style='border:none'>Sair</a>
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
                        <a href="IndexRCW.php#quemSomos" class="btn btn-outline-info" style="border:none">Quem Somos</a>
                    </li>
                    <li class="nav-item active menus">
                        <a href="IndexRCW.php#contato" class="btn btn-outline-info" style="border:none">Contatos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="fundo set-bg">
        <div class="box" style="float:none; margin:200px auto; height:auto; min-width: 10%">
            <div class="boxPerfil">
            	<?php
					include('conexao.php');
					$buscar = mysqli_query($con, "select * from cliente where id_cliente = (select id_cliente from cliente where cpf = '". $_SESSION['user']."')");
					$cliente = mysqli_fetch_array($buscar);
					echo"
					<div class='topoPerfil'>
						<div class='fotoPerfil'>
							<img src='".$cliente['foto']."'>
						</div>
						<div class='nomePerfil'><strong>Bem vindo ".$cliente['nome']."</strong></div>
					</div>
					<div class='meioPerfil'>
						<table class='tabela'>
							<tr>
								<td class='tabelaItem'>
									Cpf:
								</td>
								<td class='tabelaItem'>
									".$cliente['cpf']."
								</td>
							</tr>
							";
							
							$buscar = mysqli_query($con, "select email, telefone, celular from contato where id_cliente = ".$cliente['id_cliente']);
							$cont = 0;
							while($clientePerfil = mysqli_fetch_array($buscar)){
							$cont ++;
							echo"
							<tr>
								<td class='tabelaItem'>
									Email $cont:
								</td>
								<td class='tabelaItem'>
									".$clientePerfil['email']."
								</td>
							</tr>
							<tr>
								<td class='tabelaItem'>
									Telefone $cont:
								</td>
								<td class='tabelaItem'>
									".$clientePerfil['telefone']."
								</td>
							</tr>
							<tr>
								<td class='tabelaItem'>
									Celular $cont:
								</td>
								<td class='tabelaItem'>
									".$clientePerfil['celular']."
								</td>
							</tr>
							";
							}
							echo"
						</table>
					</div>
					<a href='telaDeAtualizacao.php?codigo=".$cliente['id_cliente']."' class='btn btn-outline-info' style='margin-left:43%;'>Editar</a>
				";
				?>
			</div>
        </div>
    </section>
</body>
</html>
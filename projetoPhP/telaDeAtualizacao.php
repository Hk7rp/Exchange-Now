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
					<li class='nav-item active menus' style='margin: 10px 5px 10px 20px;'>
						<a href='logout.act.php' class='btn btn-outline-danger' style='border:none'>Sair</a>
					</li>
					<li class='nav-item active menus' style='margin: 10px 20px 10px 20px;'>
						<a href='telaDePerfil.php' class='btn btn-outline-light' style='border:none'>Perfil</a>
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
<?php
include('conexao.php');
include('funcao.php');
$cliente = mysqli_fetch_array(mysqli_query($con, "select nome, cpf, foto from cliente where id_cliente = ". $_GET['codigo']));


?>
    <section class="fundo set-bg">
    	<div class="footer-Cadastro">
            <div class="titulo"><strong>Alteração de cadastro</strong></div>
            <div class="cadastro">
                <form method="POST" enctype="multipart/form-data" action="telaDeAtualizacao.act.php">
                    <table>
                        <tr><td>Nome:</td><td><input type="text" name="nome" placeholder="Nome" style="width:400px;" value=<?php echo $cliente['nome']?>></td></tr>
                        <tr><td>Cpf:</td><td><input type="text" name="cpf" placeholder="Cpf" style="width:150px;" value=<?php echo $cliente['cpf']?>></td></tr>
                        <?php
                            $busca = mysqli_query($con, "select email, telefone, celular, id_contato from contato where id_cliente = ". $_GET['codigo']);
                            $cont = 0;
                            while($contato = mysqli_fetch_array($busca)){
                                $cont++;
                                echo "<tr><td>Contato $cont:</td><td><a href='alterarContato.php?codContato=".$contato['id_contato']."&codCliente=".$_GET['codigo']."' class='btn btn-outline-primary' style='border:none'>Alterar</a>
                                <a href='excluirContato.act.php?codContato=".$contato['id_contato']."&codCliente=".$_GET['codigo']."' class='btn btn-outline-danger' style='border:none'>Excluir</a></td></tr>";
                            }
                            echo "<tr><td></td><td><a href='adicionarContato.php?codCliente=". $_GET['codigo']."' class='btn btn-outline-success' style='border:none'>Adicionar</a></td></tr>
                            <input type='file' id='foto' name='foto' style='display: none;'>
                            <tr><td></td><td><label for='foto'><img src='".$cliente['foto']."' class='fotoAlterPerfil'></label></td></tr>
                            ";
                            $_SESSION['foto'] = $cliente['foto'];
                        ?>
                        
                        <tr><td><button type="submit" name="enviar" class="botaoForm" style="margin-top:25px; margin-bottom:20px">Atualizar</button></td>
                        <td><button type="submit" name="voltar" class="botaoForm" style="margin-top:25px; margin-bottom:20px">Voltar</button></td>
                    </tr>
                    
                    </table>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>
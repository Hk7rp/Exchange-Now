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
        <div class="box" style="float:none; margin:200px auto;">
            <div class="titulo"><strong>Login</strong></div>
            <div class="cadastro" style="margin: 0 0 0 0;">
                <form method="POST" style="margin: 10px 150px 50px 100px" action="login.act.php">
                    <table>
                        <tr><td>Cpf:</td><td><input type="text" name="cpf" placeholder="Texto do Campo" style="width:150px;"></td></tr>
                        <tr><td>Senha:</td><td><input type="password" name="senha" placeholder="Texto do Campo"></td></tr>
                    </table>
                    <button type="submit" class="botaoForm" style="margin:25px 0 20px 120px">Logar</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
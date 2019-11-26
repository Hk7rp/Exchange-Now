<?php
function selectProd($con, $objeto){
    $buscar = buscarArray($con, $objeto);
    $qtd = mysqli_num_rows($buscar);

    if($qtd > 0){
        $loop = 0;
        while($peca = mysqli_fetch_array($buscar)){
            $loop++;
            $resp = $peca['qtd'] > 0? "SIM":"NÃO";
            $dec = $peca['qtd'] > 0? "decisao1":"decisao2";

            $ativo = $loop == 1 ? "active":"";


            echo "<div class='carousel-item $ativo'>
                <div class='boxProd'>
                    <img src='".$peca['foto']."' alt='Primeiro Slide'>
                    <div class='oferta'>
                    <div class='tituloProd'>
                        <strong>".$peca['nome']."</strong>
                    </div>
                    <div class'conteudo' style='font-size: 14px'>
                        <p>".$peca['descricao']."</p>
                    </div>
                    Tem no estoque?<br>
                    <div class='estoque $dec'>
                        <strong>$resp</strong>
                    </div>
                </div>

            </div>
        </div>
        ";
        }
    }else{  
        echo "<p>Em manutenção</p>";
    }
}

function cadastroCliente($con, $nome, $cpf, $senha, $foto, $email, $telefone, $celular){
    
    $senha = md5($senha);

    if(mysqli_query($con, "Insert into cliente(nome, cpf, senha, foto) values ('$nome', '$cpf', '$senha', '$foto');")){
        $busca = mysqli_query($con, "select id_cliente from cliente where cpf = '$cpf'");
        $cliente = mysqli_fetch_array($busca);
        $id_cliente = $cliente['id_cliente'];
        if(mysqli_query($con, "Insert into contato(email, telefone, celular, id_cliente) values ('$email', '$telefone', '$celular', '$id_cliente');")){
            return "<strong style='color: green;'>Cadastro Realizado!</strong>";
        }
    }
}

function buscarArray($con, $peca){
    $busca = mysqli_query($con, "Select nome, qtd, descricao, foto from produto where peca = '$peca'");
    return $busca;
}

function atualizarCliente($con, $nome, $cpf, $foto, $id){
    
    return "<strong style='color: green;'>Atualizado!</strong>";
}
?>
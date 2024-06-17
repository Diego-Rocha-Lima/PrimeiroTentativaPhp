

<?php 
   
  
    
    include("conexao.inc");
    
    
        //dados do formulário
        $codigo_cliente = $_POST['codigo_cliente'];
        $razao_social = $_POST['razao_social'];
        $nome_fantasia = $_POST['nome_fantasia'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $data_inclusao = $_POST['data_inclusao'];
    



    
        
     
        $sql = "UPDATE `novosclientes` SET `cod_cliente`=$codigo_cliente,`razao_social`='$razao_social',
        `nome_fantasia`='$nome_fantasia',`endereco`='$endereco',`complemento`='$complemento',
        `bairro`='$bairro',
        `cidade`='$cidade',`estado`='$estado',`data_inclusao`='$data_inclusao' WHERE id=$codigo_cliente";
    
        $res = mysqli_query($con,$sql);

        if ($res == 1) {
            echo "Cliente atualizado com sucesso!";
            echo "<a href='./tabelaCadastro.php'>Ir para tabela contatos</a> ";
        } else {
            echo "Erro ao editar o cliente: ";
        }
    
    
        mysqli_close($con);
        

?>





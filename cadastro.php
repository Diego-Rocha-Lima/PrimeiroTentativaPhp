

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
    



    
        
     
        $sql = "INSERT INTO novosclientes (cod_cliente, razao_social, nome_fantasia, endereco, complemento, bairro, cidade, estado, data_inclusao) VALUES ($codigo_cliente, '$razao_social', '$nome_fantasia', '$endereco', '$complemento', '$bairro', '$cidade', '$estado', $data_inclusao)";
    
        $res = mysqli_query($con,$sql);

        if ($res == 1) {
            echo "cliente cadastrado com sucesso!";
            echo "<a href='./tabelaCadastro.php'>Ir para tabela contatos</a> ";
        } else {
            echo "Erro ao cadastrar o cliente: ";
        }
    
    
        mysqli_close($con);
        

?>





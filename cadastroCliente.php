

<?php 
   
  
    
    include("conexao.inc");
    
    
        //dados do formulário
        
        $razao_social = $_POST['razao_social'];
        $nome_fantasia = $_POST['nome_fantasia'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $data_inclusao = $_POST['data_inclusao'];
    



    
        
     
        $sql = "INSERT INTO novosclientes (razao_social, nome_fantasia, endereco, complemento, bairro, cidade, estado, data_inclusao) VALUES ('$razao_social', '$nome_fantasia', '$endereco', '$complemento', '$bairro', '$cidade', '$estado', $data_inclusao)";
    
        $res = mysqli_query($con,$sql);

        if ($res == 1) {
            echo "Cliente cadastrado com sucesso!";
            echo "<a href='./tabelaCadastro.php'>Ir para tabela cliente</a> ";
        } else {
            echo "Erro ao cadastrar o cliente: ";
        }
    
    
        mysqli_close($con);
        

?>





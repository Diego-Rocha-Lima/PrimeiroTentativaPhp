

<?php 
      
  
    
    include("conexao.inc");
    
    $codigo_cliente = $_POST['codigo_cliente'];
    $nome_do_contato = $_POST['nome_do_contato'];
    $telefone_1 = $_POST['telefone_1'];
    $telefone_2 = $_POST['telefone_2'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];





    
 
    $sql = "INSERT INTO contato (cod_clientes, nome_contato, telefone_1, telefone_2, celular, email) VALUES ($codigo_cliente, '$nome_do_contato', '$telefone_1', '$telefone_2', '$celular', '$email')";
        //dados do formulário
  
    
        $res = mysqli_query($con,$sql);

        if ($res == 1) {
            echo "Contato cadastrado com sucesso!";
            echo "<a href='./tabelaContatos.php'>Ir para tabela Contato</a> ";
        } else {
            echo "Erro ao cadastrar o Contato: ";
        }
    
    
        mysqli_close($con);
        

?>





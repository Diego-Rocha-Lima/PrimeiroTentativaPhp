

<?php 
   
  
    
    include("conexao.inc");
    
    
        //dados do formulário
        $codigo_contato = $_POST['codigo_contato'];
        $codigo_cliente = $_POST['codigo_cliente'];
        $nome_contato = $_POST['nome_contato'];
        $telefone_1 = $_POST['telefone_1'];
        $telefone_2 = $_POST['telefone_2'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
    

    /*

UPDATE `contato` SET `cod_clientes`=12,`nome_do_contato`='dwadaw',
        `telefone_1`='4324',`telefone_2`='53252',`celular`='62362',
        `email`='fss@aa' WHERE cod_contato=2
    */

    
        
     
        $sql = "UPDATE `contato` SET `cod_clientes`=$codigo_cliente,`nome_contato`='$nome_contato',
        `telefone_1`='$telefone_1',`telefone_2`='$telefone_2',`celular`='$celular',
        `email`='$email' WHERE cod_contato=$codigo_contato";
    
        $res = mysqli_query($con,$sql);

        if ($res == 1) {
            echo "Contato atualizado com sucesso!";
            echo "<a href='./tabelaContatos.php'>Ir para tabela contatos</a> ";
        } else {
            echo "Erro ao editar o cliente: ";
        }
    
    
        mysqli_close($con);
        

?>





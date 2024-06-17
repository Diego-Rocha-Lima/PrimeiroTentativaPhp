<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="tabela.css">
  </head>
  
  <body>
          
    <button><a href="tabelaCadastro.php">Ir para tabela clientes</a></button>      
    <br/>
    <br/>
  <form method="POST" action="tabelaContatos.php">
  <label>Selecione o codigo de contato (Cod. Contato) que voce deseja deletar:</label>
    <input type="number" name="deletar">
    <input type="submit" value="Deletar">       
    </form>


    <?php 

include("conexao.inc");
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deletar'])){
  $idDeletar = $_POST['deletar'];
  
  $sql = "DELETE FROM contato WHERE cod_contato=$idDeletar";
    
  $res = mysqli_query($con,$sql);
  $affected_rows = mysqli_affected_rows($con);
    if ($affected_rows == 1) {
      echo "Contato deletado com sucesso!";
      
    } else {
      echo "Erro ao deletar o contato: ";
    }
}





mysqli_close($con);



?>
    
    <h1>Tabela contatos</h1>
    <a href="./cadastroContato.html">Adicionar novo contato</a> <br/> <br/>
    <a href="./EditarContatos.html">Editar informações do contato</a>
    <br/>
    <br/>
    <table >
        <thead>
            <tr>
              <th scope="col">Cod. Contato</th>
              <th scope="col">Cod. Cliente</th>
              <th scope="col">Nome do Contato</th>
              <th scope="col">Telefone 1</th>
              <th scope="col">Telefone 2</th>
              <th scope="col">Celular</th>
              <th scope="col">Email</th>
              
            </tr>
          </thead>

          <tbody>
          

            <?php
            include("conexao.inc");

            $sql = "SELECT * FROM tiozadb.contato";

            $res = mysqli_query($con,$sql);

           while($reg=mysqli_fetch_row($res)){
             $idContato = $reg[1];
             $idCliente = $reg[0];
             $nomeContato = $reg[2];
             $telefone1 = $reg[3];
             $telefone2 = $reg[4];
             $celular = $reg[5];
             $email = $reg[6];

            echo "<tr>
            <th scope='row'>$idContato</th>
            <td>$idCliente</td>
            <td>$nomeContato</td>
            <td>$telefone1</td>
            <td>$telefone2</td>    
            <td>$celular</td>
            <td>$email</td>
          
            </tr>";

           }

            ?>  

          </tbody>
    </table>


    
       
    






 
</body>

</html>
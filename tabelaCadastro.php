<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="tabela.css">
  </head>
  
  <body>
          
    <button><a href="tabelaContatos.php">Ir para tabela contatos</a></button>      
    <br/>
    
  <form method="POST" action="tabelaCadastro.php">
    <br/>
   
  <label>Selecione o cliente(Cod. Cliente) que voce deseja deletar:</label>
    <input type="number" name="deletar">
    <input type="submit" value="Deletar">       
    </form>


    <?php 
  $a="";
include("conexao.inc");


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deletar'])){

  $idDeletar = $_POST['deletar'];

$sql = "DELETE FROM novosclientes
WHERE id = $idDeletar
  AND NOT EXISTS (SELECT cod_clientes FROM contato WHERE cod_clientes = $idDeletar);";
  
$res = mysqli_query($con,$sql);
  $affected_rows = mysqli_affected_rows($con);
    if ($affected_rows == 1) {
      echo "Cliente deletado com sucesso!";
      
    } 
    else {
      $a = "Não foi possível excluir o cliente.</br> Verifique se o id foi digitado corretamente, se esse não for o caso, ele possui um contato cadastrado. </br>O cliente só poderá ser excluído após excluir o contato.";
      echo $a;
    }
}







mysqli_close($con);



?>
    
    <h1>Tabela clientes</h1>
    <a href="./cadastroCliente.html">Adicionar novo cliente</a> </br> </br> 
    <a href="./EditarCliente.html">Editar informações do cliente</a>
    </br>
    </br>
    <table >
        <thead>
            <tr>
              <th scope="col">Cod. Cliente</th>
              <th scope="col">Razão social</th>
              <th scope="col">Nome Fantasia</th>
              <th scope="col">Endereço</th>
              <th scope="col">Complemento</th>
              <th scope="col">Bairro</th>
              <th scope="col">cidade</th>
              <th scope="col">Estado</th>
              <th scope="col">Data de Inclusão</th>
              
            </tr>
          </thead>

          <tbody>
          

            <?php
            include("conexao.inc");

            $sql = "SELECT * FROM tiozadb.novosclientes";

            $res = mysqli_query($con,$sql);

           while($reg=mysqli_fetch_row($res)){
             $id = $reg[0];
             $razao = $reg[2];
             $nomeF = $reg[3];
             $end = $reg[4];
             $comp = $reg[5];
             $bairro = $reg[6];
             $cidade = $reg[7];
             $estado = $reg[8];
             $data = $reg[9];

            echo "<tr>
            <th scope='row'>$id</th>
            <td>$razao</td>
            <td> $nomeF</td>
            <td> $end</td>
            <td> $comp</td>
            <td> $bairro</td>
            <td> $cidade</td>
            <td> $estado</td>
            <td>$data</td>
            </tr>";

           }

            ?>  

          </tbody>
    </table>


    
       
    



    






 
</body>



</html>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="tabela.css">
  </head>
  
  <body>
  
  <form method="POST" action="tabelaCadastro.php">
  <label>Qual id voce quer deletar seu fracassado</label>
    <input type="number" name="deletar">
    <input type="submit" value="Deletar">       
    </form>


    <?php 

include("conexao.inc");

$idDeletar = $_POST['deletar'];

$sql = "DELETE FROM novosclientes WHERE id=$idDeletar";
  
$res = mysqli_query($con,$sql);


  if ($res == 1) {
    echo "Cliente deletado com sucesso!";
    
  } else {
    echo "Erro ao deletar o cliente: ";
  }





mysqli_close($con);



?>


    <a href="./cadastro.html">Ir para o formulario</a>
    <a href="./Editar.html">Ir para o editar</a>
    <table >
        <thead>
            <tr>
              <th scope="col">Cod. Cliente</th>
              <th scope="col">Razão social</th>
              <th scope="col">Nome Fantasia</th>
              <th scope="col">Data de Inclisão</th>
              <th scope="col">N contatos</th>
              <th scope="col">Modificações</th>
            </tr>
          </thead>

          <tbody>


            <?php
            include("conexao.inc");

            $sql = "SELECT * FROM novocliente.novosclientes";

            $res = mysqli_query($con,$sql);

           while($reg=mysqli_fetch_row($res)){
             $id = $reg[0];
             $razao = $reg[2];
             $nomeF = $reg[3];
             $data = $reg[9];

            echo "<tr>
            <th scope='row'>$id</th>
            <td>$razao</td>
            <td> $nomeF</td>
            <td>$data</td>
            <td>2</td>
            <td><button id='$id' class='btnExcluir'>Excluir</button></td>
            </tr>";

           }

            ?>  

          </tbody>
    </table>


    
       
    






 
</body>

</html>
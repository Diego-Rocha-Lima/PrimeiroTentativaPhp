<?php 
 
      $host = 'localhost';
    $user = 'root';
    $senha = '';
    

  $con = mysqli_connect($host,$user,$senha);
    //db da minha maquina
    mysqli_select_db($con,"novocliente");
    
    if(!$con){
        die('Conexão falhou' . mysqli_connect_error());
    }

?>


  



/*
window.onload = function() {
  
    let pegarId = -1;
  
    body = document.querySelector("body");
  
  
    body.addEventListener("click", (e)=>{
        
        if(e.target.className){
            
            if(!window.confirm("Voce quer excluir o cadastro codCliente "+e.target.id)){
                return;
            }
            pegarId=e.target.id;
            
            fetch('tabelaCadastro.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ valor: pegarId })
    });
  
    <?php 
  
  if(isset($_POST['valor'])){
    echo $_POST['valor'];
  }
  
  ?>
            
  
            
        }
    })
  
   
  
    
  
  }         

  */
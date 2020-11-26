<?php 
include ("session.php");
$nome=$_POST["name"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$senha=$_POST["password"];

$gravaSenha=md5($senha);      


date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo '';
} else {
    echo '';
}

include("../../conecta.php");

// generate and execute a query
$query = "SELECT * FROM usuario where email= '$email'";

$result = pg_query($connection, $query) or die("Error in query: $query. " . pg_last_error($connection));

// get the number of rows in the resultset
/*$rows = pg_num_rows($result);*/

/*echo "There are currently $rows records in the database.";*/

// close database connection


$comando = pg_query($connection,$query);




          while ($linha = pg_fetch_array($comando))
                  
                      
               {
                 $id = $linha["id"];
                 $emailbd=$linha["email"];
                 $senhabd=$linha["senha"];
            
                        
          }


          
if ($emailbd===$email) { 
    include("nav.php");

    ?>
            
   <div class="alert alert-primary" role="alert">
       Seu e-mail ja consta no sistema <a href="CadastraUsuario.php" class="alert-link">Voltar</a>. </div> 
    <?php
    include("footer.php");
    exit;
}



 $dados="insert into  usuario (nome, email,senha,telefone) values ('$nome','$email','$gravaSenha','$telefone')";



if($connection){
    include("nav.php");

    ?>
            
   <div class="alert alert-primary" role="alert">
       Cadastro efetuado com sucesso<a href="CadastraUsuario.php" class="alert-link">Voltar</a>. </div> 
    <?php
    include("footer.php");
    exit;


    
}else{
    
    include("nav.php");

    ?>
            
   <div class="alert alert-primary" role="alert">
       Cadastro Negado<p><a href="CadastraUsuario.php" class="alert-link">Voltar</a>. </div></p>
    <?php
    include("footer.php");
    exit;


    
}

    
   

    
         
    
    
    
    











 

 
  
?>
            


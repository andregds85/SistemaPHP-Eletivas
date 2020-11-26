<?php

include("../../conecta.php");


// generate and execute a query
$query = "SELECT * FROM usuario";
$result = pg_query($connection, $query) or die("Error in query: $query. " . pg_last_error($connection));

// get the number of rows in the resultset
$rows = pg_num_rows($result);


// close database connection

     
?>


        <div class="card">
        <div class="card-body">
           <?php echo  "Total de Registros no Banco: ";
            echo $rows; ?>
    
    </div>
</div>

<?php





$comando = pg_query($connection,$query);
        

            
             echo  "<div class='container-fluid'>"; 
              while ($linha = pg_fetch_array($comando))
               {
                 $id = $linha["id"];
                 $nome=$linha["nome"];
                 $email=$linha["email"];
                 $senha=$linha["senha"];
                 $telefone=$linha["telefone"];
                 
               
              
               echo  "<div class='card'>";   
               echo  "<h5 class='card-header'>$id</h5>";
               echo  "<div class='card-body'>";      
               echo  "<h5 class='card-title'>Nome: .$nome</h5>";
               echo "<p class='card-text'>E-mail: .$email </p>";
               echo "<p class='card-text'>Telefone: .$telefone </p>";
               echo "<a href='#' class='btn btn-primary'>Apagar</a>";
               echo "</div>";
                  
                  
        
                      
            
       }


               echo "</div>";     




?>
         
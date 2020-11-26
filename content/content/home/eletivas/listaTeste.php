<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include("title.php"); ?></title>
     
  </head>
  <body>
 
<!-- Topo da Página -->      
      
<?php include("topo.php"); ?>
      
      <p></p>
      <!-- Fluid Jumbotron --> 
      
     
      
   <!-- Listar Usuário dentro da pasta Buscar usuarios-->      
      
 <div class="container-fluid">    
 <div class="card">
  <h5 class="card-header">Usuários Cadastrados</h5>

</div>
</div>
      
<?php 
      
include("../conecta.php");
      
$comando20 = "select * from fila where numeroSolicitacao=numeroSolicitacao";
$res = mysqli_query($con, $comando20);


        echo  "<div class='container-fluid'>";   
          while ($linha = mysqli_fetch_array($res))
                  
                      
               {
                 $id_fila = $linha["id_fila"];
                 $numeroSolicitacao=$linha["numeroSolicitacao"];
                 $dataSolicitacao=$linha["dataSolicitacao"];
                 $cns=$linha["cns"];
                 $nomePaciente=$linha["nomePaciente"];
                 $codSigtap=$linha["codSigtap"];
                 $municipioSolicitante=$linha["municipioSolicitante"];
                 $dataNasc=$linha["dataNasc"];
                 $obs=$linha["obs"];
                 $status=$linha["status"];
                 $idade=$linha["idade"];
    
        
             echo "<div class='card text-center'>";
               echo "<div class='card-header'>";
               echo "Número da Solicitação : ";
               echo $numeroSolicitacao;
               echo "  ";
               echo $nomePaciente;
               echo"</div>";  
                  
               
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>Idade: </h5>";
    
    echo "</h5>";
   
    echo "<div class='card-body'>";
   
                  
     echo "<a href='excluiDupli.php?us_id= $id_fila ' class='btn btn-primary'>Apagar</a>";
    echo "</div>";              
    echo "</div>";              
   
              
    echo "<div class='card-footer text-muted'>";
    echo "ID : ";
    echo $id_fila;
    echo "/";
    echo "/";
  
    echo  "</div>";
    echo "</div>";
    
            
       }
echo "</div>;"

?>
          
      </div>     
      
      
      
  <?php include("rodapeLimpo.php"); ?>      
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
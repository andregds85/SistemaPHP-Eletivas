<?php include ("session.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      
       <!-- Estilo de foter -->
      <link href="css/estiloFoter.css" rel="stylesheet">


    <title><?php include("title.php"); ?></title>
  </head>
  <body>
 
<!-- Topo da Página -->      
      
 <?php include("topo.php");
    include("../conecta.php");
?>

      <!-- Fluid Jumbotron --> 
      
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
 <img src="logo/logo.jpg" width="180" height="180" alt="..." class="rounded-circle">
</div>      
  
    <h1 class="display-4">Listagem das Filas por Categorias</h1>
    <p class="lead">Categorias de Filas</p>
  </div>
  </div>
   </div>    

      <!-- tempo do Cadastro -->      
    <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
 <h1 class="display-4">Listagem por nome
 </h1>
     <p class="card-text">
          Listagem por nome clique aqui <a href="ListarporNome.php">Listar por nome</a> </p>
  </div>
  </div>
  </div>    
            
          <!-- tempo do Cadastro -->      
    <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
 <h1 class="display-4">Listagem por Unidade Desejada
 </h1>
<p class="card-text">
Listar todos por unidade Desejada clique aqui <a href="ListarTodosUnidadeDesejada.php">Listar por Unidade Desejada</a> 
 
<?php 

$comando20 = "SELECT * FROM fila";
$res = mysqli_query($con, $comando20);
     echo  "<div class='container-fluid'>";   
?>
  
  <form method="post" action="ListarporUnidadeDesejada.php" enctype="multipart/form-data">


<select name="unidade" id="unidade">

<?php     
    
    while ($linha = mysqli_fetch_array($res)){
                       $unidadeDesejada=$linha["unidadeDesejada"];

               
      echo "<option>$unidadeDesejada</option>";
            
       }
echo "</div>";

?>
    </select>

    <input type="submit" value="Enviar" />
</form>
 
 
     
     </p>
  </div>
  </div>
   </div>   
        
 <?php include("rodapeLimpo.php"); ?>
  
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


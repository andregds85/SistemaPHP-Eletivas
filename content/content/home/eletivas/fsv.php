<?php include ("session.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
 <!-- Estilo de fotter -->
 <link href="css/estiloFoter.css" rel="stylesheet">
 
 <title><?php include("title.php"); ?></title>
  </head>
  <body>
 <!-- Topo da Página -->      
<?php 
include("topo.php"); 
include("../conecta.php");
$consulta=$_SESSION['usr'];      
      
$comando20 = "SELECT * FROM usuarios where usuario ='$consulta'";
$res = mysqli_query($con, $comando20);
      
      while ($linha = mysqli_fetch_array($res))
                                
               {
                 $id = $linha["id"];
                 $nome=$linha["nome"];
                 $sobrenome=$linha["sobrenome"];
         
              echo "<div class='alert alert-dark' role='alert'>";
              $hoje = date('d/m/Y');
              echo " Olá ";
              echo "$nome";
              echo "<br>";
              echo "<p>$sobrenome";
              echo "</p>";
              echo "Tenha um Bom";
              echo "<br>";
              echo $hoje;
              echo"</div>";  
                  
          }
          
?>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
 <img src="logo/logo2.png" width="180" height="180" alt="..." class="rounded-circle">
</div>      

    <h1 class="display-4" >Eletivas</h1>
    <p class="lead"></p>
  </div>
  </div>
   </div> 
      
      
  <!-- Menu Mapa --> 

      
 <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">CSV</h5>
      <p class="card-text">Importe arquivos .CSV</p>
       
        <p class="card-text"><small class="text-muted"><a href="import.php">Importar .CSV</a></small></p>

        <p class="card-text"><small class="text-muted"><a href="modelos/MOdelo%200.csv">Modelo 0</a></small></p>
        
        <p class="card-text"><small class="text-muted"><a href="modelos/Modelo%201.csv">Modelo 1</a></small></p>
 
        <p class="card-text"><small class="text-muted"><a href="modelos/Modelo%202.csv">Modelo 2</a></small></p>
        
  </div>
  </div>
 
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Fila</h5>
      <p class="card-text">Área reservada para Filas.</p>
      
        <p class="card-text"><small class="text-muted"><a href="frmCadastra.php">Cadastra Fila</a></small></p>

        <p class="card-text"><small class="text-muted"><a href="listarUShospitalar.php">Listar Fila</a></small></p>
        
        <p class="card-text"><small class="text-muted"><a href="ListarporNome.php">Listar todas da filas</a></small></p>
        
        <p class="card-text"><small class="text-muted"><a href="ListarTodosUnidadeDesejada.php">Listar todos  por unidade Desejada</a></small></p>
   
        </div>
        </div>
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">Usuário Hospitalar</h5>
      
         <p class="card-text">Área reservada para usuários do ambiente Hospitalar.</p>
        
         <p class="card-text"><small class="text-muted"><a href="frmCadastraUShospitalar.php">Cadastrar Usuários</a></small></p>

         <p class="card-text"><small class="text-muted"><a href="listarUShospitalar.php">Listar Usuários</a></small></p>
 
         </div>
         </div>
         </div>     
<!-- parte 2 -->
<!-- Menu Mapa --> 
  
 <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Usuário Eletivas</h5>
      <p class="card-text">Área reservada para usuários do ambiente Eletivas.</p>
        <p class="card-text"><small class="text-muted"><a href="frmCadastraUsEletivas.php">Cadastrar Usuários</a></small></p>
<p class="card-text"><small class="text-muted"><a href="ListarUSeletivas.php">Listar Usuários</a></small></p>
 
  </div>
  </div>            
 
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Status</h5>
        
        <p class="card-text">
        <small class="text-muted"><a href="pendentes.php">Pendentes</a>
        </small>
        </p>
     
 <p class="card-text">
        <small class="text-muted"><a href="aprovado.php">Aprovados</a></small></p>
        
        
        <p class="card-text">
        <small class="text-muted"><a href="devolvido.php">Devolvidos</a></small></p>
        
            
        <p class="card-text">
        <small class="text-muted"><a href="duplicados.php">Duplicados</a></small></p>

      
  </div>
  </div>
  <div class="card">
     <div class="card-body">
      <h5 class="card-title">Extra</h5>
      <p class="card-text">Área reservada para Extra.</p>
       
         
         
        <p class="card-text">
        <small class="text-muted"><a href="../aplicativo/hospitalarEletivas.apk">Aplicativo</a></small>
        </p>

         
         
        <p class="card-text">
        <small class="text-muted"><a href="sair.php">Sair</a></small>
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
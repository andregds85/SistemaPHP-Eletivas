<?php 
include ("session.php");
$consulta=$_SESSION['usrHosp'];

include("nav.php"); 

include("../../conecta.php");
      
$comando20 = "SELECT * FROM 
hospitalar_usuarios
where email ='$consulta'";
$res = mysqli_query($con, $comando20);
      
      while ($linha = mysqli_fetch_array($res))
                                
               {
                 $id = $linha["id"];
                 $nome=$linha["nome"];
                 $sobrenome=$linha["sobrenome"];
                 $email=$linha["email"];
         
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







      
<div class="card">
  <div class="card-header">
    Hospitalar- Área main - Controle da informação 
  </div>
  <div class="card-body">
    <h5 class="card-title">Hospitalar - </h5>
    <p class="card-text">Módulo Hospitalar. Controle de cirurgias eletivas</p>
   </div>
</div>      
 
<!-- Dividindo a Página -->


<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Procedimentos</h5>
      
        <p class="card-text"><small class="text-muted">
        <a href="import.php">Import .CVS</a></small></p>
        
        
        <p class="card-text"><small class="text-muted">
        <a href="Allprocedimentos.php">Listar todos os Procedimentos</a></small></p>
        
  <p class="card-text"><small class="text-muted">
  <a href="consultaProcedimentos.php">Consultar Procedimento</a></small></p>
        
        
        
        
        

 
        
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Mapas</h5>

        
        
       <p class="card-text"><small class="text-muted">
  <a href="#">Listar Mapas</a></small></p>
      
      
      
      </div>
  </div>
 
    
    
    
    
    
    
    
    
    
    <div class="card">
    <div class="card-body">
      <h5 class="card-title">Extra</h5>
 <p class="card-text"><small class="text-muted"><a href="../../aplicativo/hospitalarEletivas.apk">Aplicativo para Andróid</a></small></p>
 </div>
  </div>
</div>

<?php include("footer.php"); ?>
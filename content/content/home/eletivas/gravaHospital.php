<?php  include ("session.php"); 

$hospital=$_POST["hospital"];
include("../conecta.php");   

// executa a consulta
$sql = "SELECT * FROM hospital";
$res = mysqli_query($con, $sql);
 
// conta o número de registros
$total = mysqli_num_rows($res);
 
 "Total de Resultados: " . $total . "<br>";
   
     $compara=$hospital;
 
      
     while ($linha = mysqli_fetch_array($res))
{
    $hospital1= $linha['hospital']; 

         if($compara==$hospital1){ 

              
               include("topo.php");
              
            echo "<div class='alert alert-primary' role='alert'>
            Hospital ja consta no Sistema.
            </div>";
              
              
             echo "<br>";
             echo "<div class='alert alert-primary' role='alert'>
             <a href='frmCadastraHospital.php'>Voltar</a>
             </div>";
            
              include("rodapeLimpo.php");
              exit;
          }
         }

$dados=("insert into hospital(hospital) values ('$hospital')");

// executa a consulta
$resDados = mysqli_query($con, $dados);
 
    if($resDados){
        
       include("topo.php");
              
            echo "<div class='alert alert-primary' role='alert'>
        Cadastro Efetuado com sucesso
                  </div>";
              
       
              include("rodapeLimpo.php");
              exit;
        
       
    }else{
        echo "erro no cadastro";
    }


 
        

    ?>  
      

            


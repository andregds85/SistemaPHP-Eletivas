<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      
       <!-- Estilo de foter -->
    <link href="css/estiloFoter.css" rel="stylesheet">
 
      <title>Eletivas</title>
  </head>
  <body>



<?php include ("session.php");
include("topo.php");


$cod=$_GET['cod'];


?>


 
<!-- Topo da Página -->      
      
<?php  
include("../conecta.php");
$unidade="asdasda";      
      
?>
      
      
      
      
      
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Detalhamento</h1>
        <p class="lead">Detalhamento </p>
    </div>
</div>      
      
      
      
      
      
      
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Unidade Desejada</th>
      <th scope="col">Data da Solicitação</th>
    </tr>
 </thead>  
<?php          
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from fila"; 
     
    $produtos = mysqli_query($con,$cmd); 

    //conta o total de itens 
    $total = mysqli_num_rows($produtos); 

    //seta a quantidade de itens por página, neste caso, 2 itens 
    $registros = 1000; 

    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    //variavel para calcular o início da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 
 
    //seleciona os itens por página 
   /* $cmd = "select * from fila where unidadeDesejada ='$unidade1'  limit $inicio,$registros"; */
    $cmd = "select * from fila where id_fila ='$cod'";
 
    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     
    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
           
      echo "<tbody>";
      echo "<tr>";
      echo "<th scope='row'>";
      echo $produto['id_fila']." - "; 
      echo "</th>";  
     
      echo "<td>";
      echo $produto['nomePaciente']." - "; 
      echo "</td>";
      echo "<td>";
      echo $produto['unidadeDesejada']." - "; 
      echo "</td>";
     
      echo "<td>";
      $dataSol=$produto['dataSolicitacao'];
      echo $solicitao=date('d/m/'.'20y', strtotime($dataSol));    
      echo "</td>";
      echo "</tr>";  
        
      echo "<tr>";
      echo "<th scope='row'>";
        
      echo " - ";    
      echo "</th>";  
     
      
      echo "<td>";
      echo "<b>";    
      echo "Número da Solicitação";
      echo "</td>";
      echo "<td>";
      echo "</b>";
        
      echo "<b>";    
      echo "CNS";
      echo"</td>";
      echo "</b>";
        
      echo "<b>";    
      echo "<td>";
      echo "<b>";    
      echo "Código Sigtap";        
      echo"</td>";
      echo "</b>";       
      echo "</tr>";      
        
      echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo $produto['numeroSolicitacao']." - "; 
      echo"</td>";
          
      echo "<td>";
      echo $produto['cns']." - "; 
      echo"</td>";
     
      echo "<td>";
      echo $produto['codSigtap']." - "; 
      echo"</td>";
      echo "</tr>";  
     
      echo"<tr>";
      echo "<th scope='row'>";
        
      echo " - ";    
      echo "</th>";  
     
      echo "<td>";
      echo "<b>";    
      echo "Municipio Solicitante";
      echo "</td>";
      echo "<td>";
      echo "</b>";
        
      echo "<b>";    
      echo "Unidade Desejada";
      echo"</td>";
      echo "</b>";
        
      echo "<b>";    
      echo "<td>";
      echo "<b>";    
      echo "Observação";        
      echo"</td>";
      echo "</b>";       
      echo "</tr>";      
              
      echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo $produto['municipioSolicitante']." - "; 
      echo"</td>";
          
      echo "<td>";
      echo $produto['unidadeDesejada']." - "; 
      echo"</td>";
     
      echo "<td>";
      echo $produto['obs']." - "; 
      echo"</td>";
      echo "</tr>";     
        
      echo"<tr>";
      echo "<th scope='row'>";
      echo " - ";    
      echo "</th>";  
     
      echo "<td>";
      echo "<b>";    
      echo "STATUS";
      echo "</td>";
      echo "<td>";
      echo "</b>";
        
      echo "<b>";    
      echo "Idade"; 
      echo"</td>";
      
      echo "<td>";
      echo "<b>";         
      echo "Data de Nascimento";    
      echo "</b>";
      echo "</td>";

 
      echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo $produto['status']." - "; 
      echo"</td>";
          
      echo "<td>";
      echo $produto['idade'].""; 
      echo"</td>";
     
      echo "<td>";
      $dataSolNasc=$produto['dataNasc'];
      echo $solicitao=date('d/m/y', strtotime($dataSolNasc));    
      echo"</td>";
      echo "</tr>";     
      echo"</tbody>"; 
      echo "<div class='card-body'>";
      echo "</div>";              
      echo "</div>";              
      } 
     echo "</div>";    
?>
     
<div class="container-fluid">
     
 
 <form class="was-validated"  name="regform" method="POST" action="updateDetalha.php" onsubmit="return valida()">

  <div class="form-group">
    <label for="exampleFormControlSelect2">Status do Paciente</label>
    <select multiple class="form-control" name="status" id="exampleFormControlSelect2">
      <option>Pendente</option>
      <option>Aprovado</option>
      <option>Devolvido</option>
      </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Observação</label>
    <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    
     <input type="hidden" id="custId" name="cod" value="<?php echo $cod; ?>"</input>

   <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    

    
</form>     
     
    
    
</div>     
   <br><br><br>  
     
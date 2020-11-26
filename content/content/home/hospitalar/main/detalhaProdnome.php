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
       <title>Hospitalar</title>
  </head>
  <body>

<?php include ("session.php");
include("nav.php");
$nome=$_POST['nome'];
?>
 
<!-- Topo da Página -->      
<?php  
include("../../conecta.php");
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
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
    </tr>
 </thead>  
<?php          
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from procedimentos";  
     
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
        $cmd = "select * from procedimentos where nome ='$nome'"; 

    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     
    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
           
      echo "<tbody>";
      echo "<tr>";
      echo "<th scope='row'>";
      echo $produto['id']." - "; 
      echo "</th>";  
     
      echo "<td>";
      echo $produto['codigo']." - "; 
      echo "</td>";
      echo "<td>";
      echo $produto['nome']." - "; 
      echo "</td>";
      
      echo "</tr>";  
            } 
     echo "</div>";    
?>
     

     
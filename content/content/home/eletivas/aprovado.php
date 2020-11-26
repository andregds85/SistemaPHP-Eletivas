<?php include ("session.php"); ?>
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
      <title><?php include("title.php"); ?></title>
  </head>
  <body>
 
<!-- Topo da Página -->      
<?php include("topo.php"); 
include("../conecta.php");
?>
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Número da Solicitação</th>
      <th scope="col">Status</th>
      <th scope="col">Idade</th>
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
    $registros = 100; 

    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    //variavel para calcular o início da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 
 
    //seleciona os itens por página 
    $cmd = "select * from fila where status='Aprovado' ORDER BY numeroSolicitacao ASC limit $inicio,$registros"; 
    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     

    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
       
     /* echo $produto['municipioSolicitante	']." - "; */
     /* echo "R$ ".$produto['valor']."<br />"; */
        
      echo "<tbody>";
      echo"<tr>";
      echo "<th scope='row'>";
      echo "<a href='ListarDetalhadamente.php?cod=$produto[id_fila]'>";
      echo $produto['id_fila']." - ";
      echo "</a>";     
      echo "</th>";  
      echo "<td>";
      echo $produto['nomePaciente']." - "; 
      echo"</td>";
      echo "<td>";
      echo $produto['numeroSolicitacao']." - "; 
      echo"</td>";    
      echo "<td>";
      echo $produto['status']." - "; 
      echo"</td>";
      echo "<td>";
      echo $produto['idade'];
      echo"</td>";  
      echo "</tr>";        
      echo"</tbody>";  
  } 
echo "<div class='container'>";
 //exibe a paginação 
    for($i = 1; $i < $numPaginas + 1; $i++) { 
        echo "<a href='aprovado.php?pagina=$i'>".$i."</a> ";  
    } 
echo "</div>";     
     
?>
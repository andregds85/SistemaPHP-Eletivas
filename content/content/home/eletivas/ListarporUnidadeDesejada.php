<?php include ("session.php");

$unidade1=$_POST["unidade"];

$unidade1;
?>

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
$unidade="asdasda";      
      
?>
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

    $cmd = "select * from fila where unidadeDesejada ='$unidade1'";
 
    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     

    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
           
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
      echo $produto['unidadeDesejada']." - "; 
      echo"</td>";
     
     
      echo "<td>";
        
      $dataSol=$produto['dataSolicitacao'];  
      echo $data=date('d-m-y', strtotime($dataSol));
      echo"</td>";
      echo "</tr>";        
      echo"</tbody>";  
  } 
         

echo "</div>";     
 
     
?>
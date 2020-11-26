<?php
include("../../../conecta.php");
/*include("../../topo.php");*/
?>
<div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4"> Importando dados  </h1>
     <p class="card-text"> Dados do CSV importado com Sucesso
       </p>
      <p class="card-text"> <a href="../main.php">Voltar</a>
       </p>
  </div>
  </div>
   </div>
    
<?php

$row = 1;
$obs="Sem Vizualização";
$status="Pendente";
  
    
$nome_arquivo= 'uploads/dados.csv';

$objeto= fopen($nome_arquivo, 'r');

if (($handle = fopen($nome_arquivo, "r")) !== FALSE) {

 while(($dados = fgetcsv($handle, 1000, ",")) !== FALSE) {
        
     

 $sql=("insert into procedimentos(codigo, nome) values ('$dados[0]','$dados[1]')");      
        
 
 $resDados = mysqli_query($con, $sql);
  echo '<pre>';
  print_r($dados);
  echo '</pre>';
}
fclose($objeto);
}
    
include("../rodapeLimpo.php");    
?>




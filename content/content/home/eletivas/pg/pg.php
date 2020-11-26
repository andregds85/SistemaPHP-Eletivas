<?php

include("conecta.php");


$con = mysqlI_connect($host, $user, $pass, $db);



$max = 10; // Aqui você coloca quantos resultados por página vc deseja.

if(!$pagina){
$pagina = 1;
} 

$inicio = $pagina -1;
$inicio = $inicio * $max;

$resDados = mysqli_query($con, $dados);


$consulta = "SELECT * FROM  fila order by nomePaciente asc";  // Aqui você coloca o nome da sua tabela

$query = mysqli_query("$consulta LIMIT $inicio,$max");
$todos = mysqli_query($con,$consulta);
$total = mysqli_num_rows($con,$todos);



$resDados = mysqli_query($con, $dados);


$tp = $total / $max;

    $cont = 0;


/*

While($linha = mysqli_fetch_array($query)){  // Aqui você coloca de acordo com o nome dos campos criados na tabela, exemplo: $x[data], $x[telefone].


      $cont ++;
      $id_fila =$linha["id_fila"];  	
      $nomePaciente = $linha["nomePaciente"];
      $municipioSolicitante  = $linha["municipioSolicitante"];
         if ($cont % 2 == 1)
      
      
      echo "<tr>";
      echo "<TD>  $id_fila <BR>";
      echo "$nomePaciente <BR>";
      echo "Municipio: $municipioSolicitante <p>";


}



*/















$prox = $pagina +1;
$ante = $pagina -1;

if($pagina>0)
Echo "<a href='?pagina=$ante'>Anterior</a>";


Echo "|";

if($pagina<$tp)
Echo "<a href='?pagina=$prox'>Próxima</a>";

?>

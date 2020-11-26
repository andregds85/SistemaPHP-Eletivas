<?php 

$comando20 = "SELECT * FROM hospital";
$res = mysqli_query($con, $comando20);

        echo  "<div class='container-fluid'>";   
          while ($linha = mysqli_fetch_array($res))
             {
                 $id = $linha["id"];
                 $hospital=$linha["hospital"];
                                       
               echo "<div class='card text-center'>";
               echo "<div class='card-header'>";
               echo "ID : ";
               echo  $id;
               echo"</div>";  
                           
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>Hospital: $hospital</h5>";
    echo "</h5>";
   
    echo "<div class='card-body'>";
   
    echo "<a href='ExcluiHosp.php?us_id=$id' class='btn btn-primary'>Apagar</a>";
    echo "</div>";              
    echo "</div>";              
   
    echo "<div class='card-footer text-muted'>";
    echo  "</div>";
    echo "</div>";
               
      }
echo "</div>;"

?>
         
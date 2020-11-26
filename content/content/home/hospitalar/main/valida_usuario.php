<?php 
 $usuario=$_POST["email"];
 $senha=$_POST["senha"];
 $senha1=md5($senha); 
  
include("../../conecta.php");   

// executa a consulta
$sql = "SELECT * FROM hospitalar_usuarios where email= '$usuario' and senha='$senha1'";
$res = mysqli_query($con, $sql);
 

// conta o número de registros
echo $total = mysqli_num_rows($res);

if ($total>0){
    
    $_SESSION["acesso"] = 1;
    session_start();
    $_SESSION["acesso"]="acesso";
    $_SESSION["usrHosp"]=$usuario;


    ?>
    <script> window.location.href ='main.php'; </script> <?php exit;
	}
	else
    {
        ?>
    <script> window.location.href ='sair.php'; </script> <?php exit;

}  


echo "testando";


?>
<?php  include ("session.php");

$estado1=array($_POST["estado"]);
$cidade1=array($_POST["cidade"]);    
$stringCidade= implode(",", $cidade1);
$stringEstado= implode(",", $estado1); 

/* echo "Número da solicitação :";    */
/*echo*/ $numSol=$_POST["numSol"];
/*echo "<br>"; */

/* echo "Data da solicitação :";  */   
$data1=$dataSol=$_POST["dataSol"];
/* echo */ $data=$data1;
/*echo "<br>";*/ 

/* echo "CNS do Paciente :"; */    
/* echo */ $cnsP=$_POST["cnsP"];
/*echo "<br>"; */

/* echo "Nome do Paciente :"; */    
/* echo */ $nomePac=$_POST["nomePac"];
/*echo "<br>"; */

/* echo "Unidade Desejada :"; */   
/* echo */ $unitDesj=$_POST["unitDesj"];
/* echo "<br>"; */

/* echo "Código do Sigtap :";  */  
/*echo */ $codSigTap=$_POST["codSigTap"];
/* echo "<br>"; */

/* echo "Observação :"; */    
/* echo */ $obs=$_POST["obs"];
/* echo "<br>"; */

/* echo "Status:"; */    
/* echo  */ $status=$_POST["status"];
/*echo "<br>"; */ 

/* echo "Estado Solcitante:"; */   
/*echo*/ $estado=$stringEstado;
/*echo "<br>"; */

/* echo "Municio Solicitante :";  */  
/*echo*/ $cidade=$stringCidade;
/*echo "<br>"; */

/* echo "Número da solicitação :";    */
/*echo*/ $dataNasc=$_POST["dataNasc"];
/*echo "<br>"; */

$data=date('Y-m-d', strtotime($dataNasc));
$solicitao=date('y/m/d', strtotime($dataSol));

/* Calculo da idade */ 
$dataNascimento = $dataNasc;
$date = new DateTime($dataNascimento );
$interval = $date->diff( new DateTime( date('Y-m-d') ) );

$idade=$interval->format( '%Y');
/* Calculo da idade echo $interval->format( '%Y anos' ); */ 

/* https://cursophpdozeroaoprofissional.com/como-calcular-a-idade-a-partir-da-data-de-nascimento-em-php/  */

include("../conecta.php");
 
// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);


$dados=("insert into  fila(numeroSolicitacao, dataSolicitacao,cns, nomePaciente,unidadeDesejada,codSigtap,municipioSolicitante,dataNasc,obs,status,idade) values ('$numSol','$solicitao','$cnsP','$nomePac','$unitDesj','$codSigTap','$cidade','$data','$obs','$status','$idade')");

// executa a consulta
$resDados=mysqli_query($con, $dados);
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
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include("title.php"); ?></title>
    <script src="js/validator.js"></script>
    <body>
         
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="fsv.php">Eletivas </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="fsv.php">Inicio <span class="sr-only">(Página atual)</span></a>
      </li>
     
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CSV
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="import.php">Importar .CSV</a>

     
        </div>
      </li>
        
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filas             
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="frmCadastra.php">Cadastra Fila</a>
          <a class="dropdown-item" href="listar.php">Listar Geral</a>   
          <a class="dropdown-item" href="ListarTodosUnidadeDesejada.php">Listar todos por unidade desejada</a>   
          <a class="dropdown-item" href="ListarporNome.php">Listar todos por Nome</a>        
                      
         <a class="dropdown-item" href="apagaTodosFila.php">Apaga todos os registros da fila</a>       
            
            
            
            
        </div>
      </li>                         
        
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hospitalar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="frmCadastraUShospitalar.php">Cadastro de Usuários</a>
          <a class="dropdown-item" href="listarUShospitalar.php">Listar Usuários</a>
        </div>
      </li>
                         
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eletivas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="frmCadastraUsEletivas.php">Cadastro de Usuários</a>
          <a class="dropdown-item" href="ListarUSeletivas.php">Listar Usuários</a>
        </div>
      </li>
        
        
        <!--  Status -->
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="pendentes.php">Pedente</a> 
        <a class="dropdown-item" href="aprovado.php">Aprovado</a>
        <a class="dropdown-item" href="devolvido.php">Devolvido</a>  
            
        
            
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Duplicados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="duplicados.php">Duplicados</a>
 
        </div>
      </li>    
            
            
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hospitais
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="frmCadastraHospital.php">Cadastrar Hospital</a>
        <a class="dropdown-item" href="ListarHospital.php">Listar Hospital</a>    
        </div>
        </li>   
            
        
            
            
           
            
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mapas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="#">Cadastrar Mapas</a>
        <a class="dropdown-item" href="#">Listar Mapas</a>    
        </div>
        </li>       
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Aplicativo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../aplicativo/hospitalarEletivas.apk">Baixe o Aplicativo para Android</a>
         
        </div>
      </li>
                  
            
            
            
     </ul>
    <form class="form-inline my-2 my-lg-0"  method="post" action="sair.php">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
    </form>
  </div>
</nav>
      
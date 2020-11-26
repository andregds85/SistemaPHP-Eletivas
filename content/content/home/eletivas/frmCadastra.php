<?php include ("session.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">


      
    <script language="JavaScript" type="text/javascript" src="cidades-estados-1.4-utf8.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
     
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include ("title.php"); ?></title>
      
      
      
      
     
    </head>
    <body>
 
<!-- Topo da Página -->      
      
<?php include("topo.php"); ?>
      <p></p>
      
      <!-- Fluid Jumbotron --> 
      
   <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Eletivas</h1>
    <p class="lead">Cadastro de Filas</p>
  </div>
  </div>
   </div>    
      
       
 <div class="container-fluid">    
 <form class="was-validated"  name="regform" method="POST" action="gravaFilas.php" onsubmit="return valida()">
 
  <!-- Número da Solicitação  e Data da Solicitação -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Número da Solicitação">Número da Solicitação</label>
      <input type="text" name="numSol" data-minlength="5"  class="form-control" id="cnome" placeholder="Número da Solicitação" required minlength="3">
      <div class="invalid-feedback">Favor preencher o Número da Solicitação</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Número da Solicitação">Data da Solicitação</label>
      <input type="date" name="dataSol" data-minlength="5"  class="form-control" id="cnome" placeholder="Data da Solicitação" required minlength="3">
    <div class="invalid-feedback">Favor preencher a data da Solicitação</div> 
  </div>
      </div>
    
          
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cns do Paciente da Solicitação">Cns do Paciente</label>
      <input type="text" name="cnsP" data-minlength="5"  class="form-control" id="cnome" placeholder="Cns do Paciente" required minlength="3">
      <div class="invalid-feedback">Favor preencher o Cns do Paciente</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Nome da Solicitação">Nome do Paciente</label>
      <input type="text" name="nomePac" data-minlength="5"  class="form-control" id="cnome" placeholder="Nome do Paciente" required minlength="3">
    <div class="invalid-feedback">Favor preencher o Nome do Paciente</div> 
    </div>
  </div>

      <!-- Número da Solicitação  e Data da Solicitação -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Unidade Desejada">Unidade Desejada</label>
      <input type="text" name="unitDesj" data-minlength="5"  class="form-control" id="cnome" placeholder="Unidade Desejada" required minlength="4">
      <div class="invalid-feedback">Favor preencher a unidade desejada</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="cod do Sigtap">Código do Sigtap</label>
      <input type="text" name="codSigTap" data-minlength="5"  class="form-control" id="cnome" placeholder="Código do Sigtap" required minlength="4">
      <div class="invalid-feedback">Favor preencher o Código do Sigtap</div> 
  </div>
      
 
  <div class="form-group col-md-6">
   <div class="form-group">
    <label for="observação">Observação </label>
    <textarea class="form-control" name="obs" id="Observação" rows="3"></textarea>
  </div>
    </div> 
    
      
  <div class="form-group col-md-6">
   <div class="form-group">
    <label for="status">Status</label>
       
      <select multiple class="form-control" name="status" id="exampleFormControlSelect2">
      <option>Pendente</option>
      <option>Aprovado</option>
      <option>Devolvido</option>
      </select>  
       
  </div>
    </div> 
 </div>
      
      
      
       <!-- nome e sobrenome -->    
<div class="form-row">
    <div class="form-group col-md-6">
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="nome">Selecione o Estado de Santa Catarina:</label>
      <select id="estado4" name="estado"></select>

      <div class="invalid-feedback">Favor Selecionar Estado de Santa Catarina</div>
  </div>
      
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Senha">Municipio Solicitante</label>
      <select id="cidade4" name="cidade"></select>
      <div class="invalid-feedback">Favor preencher o municipio Solicitante</div>
        
    </div>
       
        
   
    <script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade4'),
        estado: document.getElementById('estado4')
      })
    </script>

</div>

      
        
        
        
    <div class="form-row">
      <label for="Número da Solicitação">Data de Nascimento</label>
      <input type="date" name="dataNasc" data-minlength="5"  class="form-control" id="cnome" placeholder="Data de Nascimento" required minlength="3">
    <div class="invalid-feedback">Favor preencher a data de Nascimento</div>     
        
     </div>   
        
        
       </div> 
        
      
        
            
        
        
        
        
 
    <div class="form-row">
    <div class="form-group col-md-6">
     <input type="submit" class="btn btn-primary" Value="Cadastrar">
    </div>
   </div>
   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   </form>
      </div>     
 </div>
      
       <?php include("rodapeLimpo.php"); ?>
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
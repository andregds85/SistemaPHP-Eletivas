<?php 
include("session.php");
include("nav.php"); ?>

<div class="card">
  <div class="card-header">
    Consulta por código e procedimento
  </div>
  <div class="card-body">
    <h5 class="card-title">Código do procedimento</h5>
    <p class="card-text">
       
<form action="detalhaProdcod.php" method="POST" class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Código</label>
    <input type="text"  name="cod" class="form-control" id="inputPassword2" placeholder="Código">
  </div><br>
  <button type="submit" class="btn btn-primary mb-2">Consultar</button>
</form>
     </p>
   </div>
</div>      
 

<!-- Dividindo a Página -->
<div class="card-body">
    <h5 class="card-title">Nome do procedimento</h5>
<p class="card-text">
       
<form action="detalhaProdnome.php" method="POST" class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Código</label>
    <input type="text" name="nome" class="form-control" id="inputPassword2" placeholder="Nome">
  </div><br>
  <button type="submit" class="btn btn-primary mb-2">Consultar</button>
</form>
     </p>
  </div>
 
<!-- Dividindo a Página -->
<?php include("footer.php"); ?>
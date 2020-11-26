<?php 
include ("session.php");
include("nav.php"); ?>
      
<div class="card">
  <div class="card-header">
   Hospitalar - Área main - 
  </div>
  <div class="card-body">
    <h5 class="card-title">Módulo - Hospitalar</h5>
    <p class="card-text">Módulo de Login. Para acessar o sistema basta se autenticar nessa parte aqui</p>
   </div>
</div>      

<!-- Dividindo a Página -->
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Usuários</h5>
      <p class="card-text">Área reservada para usuários.</p>
        <p class="card-text"><small class="text-muted"><a href="usuarios/CadastraUsuario.php">Cadastrar Usuários</a></small></p>
<p class="card-text"><small class="text-muted"><a href="usuarios/ListarUsuario.php">Listar Usuários</a></small></p>
    
</div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Produtos</h5>
      <p class="card-text">Área reservada para produtos.</p>
       <p class="card-text"><small class="text-muted"><a href="produtos/CadastraProduto.php">Cadastrar Produtos</a></small></p>
<p class="card-text"><small class="text-muted">Listar Produtos</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Clientes</h5>
      <p class="card-text">Área reservada para clientes.</p>
 <p class="card-text"><small class="text-muted">Cadastrar Clientes</small></p>
<p class="card-text"><small class="text-muted">Listar Clientes</small></p>    </div>
  </div>
</div>

<?php include("../footer.php"); ?>
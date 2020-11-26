<?php include("nav.php"); ?>
<head>
<style type="text/css">
    #sign_up_form {
      width: 70%;
      margin: 0 auto;
    }
    .form-group, .form-check {
      padding: 8px 0;
      font-size: 22px;
    }
    .form-group label {
      display: block;
    }
    .form-group input {
      font-size: 16px;
    }
    .error, label.error {
      color: red;
      font-size: 16px;
    }
  </style>

    </head>

<body>
    
<div class="alert alert-dark" role="alert">
  Cadastro de Usuários
</div>    
    
    

<form id="sign_up_form" method="post" action="gravaUsuario.php" >
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="number" class="form-control" id="Telefone" name="telefone" placeholder="Telefone">
  </div>    

  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="Senha">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirmação de senha</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  placeholder="Confirmação de senha">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name="terms_of_use" id="terms_of_use">
      Termos de uso
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

    
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script type="text/javascript">
    $(document).ready( function() {
      $('#sign_up_form').validate({
        rules:{ 
          name:{ 
            required: true,
            minlength: 3
          },
          email: {
            required: true,
            email: true
          },
         telefone: {
            required: true,
            minlength: 9 
          },    
          password: {
            required: true
          },
          password_confirmation:{
            required: true,
            equalTo: "#password"
          },
          terms_of_use: "required"
        },
        messages:{
          name:{ 
            required: "O campo nome é obrigatório.",
            minlength: "O campo nome deve conter no mínimo 3 caracteres."
          },
          email: {
            required: "O campo email é obrigatório.",
            email: "O campo email deve conter um email válido."
          },
         telefone: {
            required: "O campo telefone é obrigatório.",
            minlength: "O campo nome deve conter no mínimo 9 caracteres." 
          },    
          password: {
            required: "O campo senha é obrigatório."
          },
          password_confirmation:{
            required: "O campo confirmação de senha é obrigatório.",
            equalTo: "O campo confirmação de senha deve ser identico ao campo senha."
          },
          terms_of_use: "Para se cadastrar você deve aceitar os termos de uso."
        }
      });
    });
  </script>
    
    
    
    <?php include("footer.php"); ?>
</body>
</html>
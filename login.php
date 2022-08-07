<?php
include_once './includes/head.php';



?>

<body id="login">
  <div id="welcome" class="container ">
<h1 id="bem-vindo"> Bem Vindo à Urban</h1>
</div>
<div id="card-login" class="container   ">

<form >
  <div id="login-form" >
  <div id="login-" class="form-group  ">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  </div>

  <div></div>
  <button type="submit" class="btn btn-login btn-light">Entrar</button>
  <button type="submit" class="btn btn-login btn-light">Criar Conta</button>
  </div>
</form>
</div>

<?php

include_once './includes/footer.php';
?>

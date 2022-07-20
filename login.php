<?php
include_once './includes/head.php';
include_once './includes/footer.php';


?>

<body id="login">
    <div id="card-login" style="width: 30rem ;" class="card container">
     <h4> Seja Bem-vindo(a) a Urban</h4>

     <form id="formulario-login" action="./consulta.php" method="post">
        <input class="input-group-text container login-input" type="text" placeholder="Insira o seu usuário" name="nome"/>
        <input class="input-group-text container login-input" type="text" placeholder="Insira a sua senha" name="senha"/>
        <div id="bot" class="container" >
        <button type="button" class="btn btn-primary container  btn-login"> Entrar</button>
        <button id="login-btn" type="button" class="btn btn-primary container  btn-login"> Cadastrar</button>
        </div>
    </form>
    </div>


</body>
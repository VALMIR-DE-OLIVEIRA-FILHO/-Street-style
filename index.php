<?php
include_once './includes/head.php';
include_once './includes/header.php';
include_once './includes/footer.php';


?>

<div id="teste" >
    <div id="form">
<form id="formulario" action="./consulta.php" method="post">
        <input class="search-txt" type="text" placeholder="pesquisar..." name="consulta"/>
        <button id="lupa" type="submit" aria-label="pesquisar produto">
        <svg id="img" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 27 27" fill="none" stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="19" y1="19" x2="16.45" y2="16.45"></line></svg>
        </button>
    </form>
</div>
</div>

<ul id="roupas-nav" class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link link" href="#">Ativo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  link" href="#">Desativado</a>
  </li>
</ul>

<div id="lancamento" class="container">
    <h1>Lançamentos</h1>
</div>
<?php


for ($i=0; $i < 10 ; $i++) { 
    # code..
?>
<div class="container">
<div id="card">
    
<div id="botaoo" class="text-center">
<button id="botao"  type="button" class="btn btn-dark">visitar</button></div>
<div id="img" >
    <img id="imgs" class="card-img" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/038/799/products/calca-cargo-white-globe-21-f1f6124e6177c55b1116547785445569-480-0.jpg" alt="Imagem do card">
    </div>
    <a id="nome_produto" href="">Calça cargo white globe</a>
  
  
</div>
</div>
</div>
<?php
}
?>






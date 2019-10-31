<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:39:44
  from 'C:\xampp\htdocs\proyectos\Web2-Cinefilo\templates\nosotros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb62b06759f9_78754342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa60991b8e3a37df5cc1b655a7c1888ccbd5c858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2-Cinefilo\\templates\\nosotros.tpl',
      1 => 1572543754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb62b06759f9_78754342 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  
  <title>TP Segunda Entrega</title>
  <link rel="shortcut icon" href="image/glasses.ico"/> 
</head>

<body>
  <!-- Inicio Nav -->
  <div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark container ">
      <a class="navbar-brand">
        <img src="image/cinefilo001.png" width="140" height="70" alt="logo de los cinéfilos">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active border-left">
            <a class="nav-link " href="">Inicio</a>
          </li>
          <li class="nav-item active border-left">
            <a class="nav-link  " href="servicios">Servicios</a>
          </li>
          <li class="nav-item active border-left">
            <a class="nav-link " href="contacto">Contáctanos</a>
          </li>
        </ul>

      </div>
    </nav>

  </div>
  <!-- FIN NAV -->
  <div class="container">
    <div class="jumbotron bg-warning text-danger">
      <h1 class="display-4">¿Quiénes somos?</h1>
      <p class="lead">Somos una agencia de cinéfilos, cada persona que la conforma además de ser el mejor en lo que
        hace, se reinventa en cada proyecto de trabajo, es por esa razón que lo nuestro es único, mantenemos la mezcla
        perfecta de tecnología y actualidad.</p>
      <hr class="my-4">
      <p>Te agradecemos que formes parte de la comunidad cinéfila y, si aún no lo hicíste, regístrate ya!.</p>

    </div>
  </div>
   <!-- Inicio registración -->
   <div>
            <p> aca va fotito</p>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

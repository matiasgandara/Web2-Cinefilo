<?php
/* Smarty version 3.1.33, created on 2019-10-31 20:53:00
  from 'C:\xampp\htdocs\proyectos\Web2-Cinefilo\templates\peliculapresentacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb3b9cae77e1_43403048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0808d764555a8cfe6d00c5257aef6cd5f4c18e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2-Cinefilo\\templates\\peliculapresentacion.tpl',
      1 => 1572551569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb3b9cae77e1_43403048 (Smarty_Internal_Template $_smarty_tpl) {
?>      <!-- Inicio presentación -->

  <div class="container-fluid bg-primary py-1">
    <div class="row text-center presentacion">
      <div class="col-12 ld-4 py-1">
        <img src="image/cine.jpg" alt="Imagen de un cine. Responsive image">
      </div>
    </div>
    <div class="container pb-1">
      <div class="row ">


        <div class="col md-3">
          <div class="text-center">
            <a class="btn btn-success btn-lg" href="home" role="button">Inicio</a>
          </div>
        </div>
        <div class="col md-3 "> </div>
        <div class="col md-3 "> </div>
        <div class="col md-3 ">
          <div class="text-center">
            <a class="btn btn-success btn-lg" href="series" role="button">Series</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- FIN PRESENTACIÓN -->
      <!-- Inicio main -->
      <div class="container">
        <div class="row">

          <div class="col-md-7">
            <h1 class="display-4 lead">Últimas noticias</h1>
            <hr>

            <!-- Inicio carrusel -->
            <div class="row justify-content-center">
              <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                  </ol>
                  <div class="carousel-inner">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>          
                      <div class="carousel-item">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->nombre_imagen;?>
 class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->nombre;?>
</h5>
                        </div>
                      </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>        
              <!-- FIN CARRUSEL -->
    <?php }
}

<?php
/* Smarty version 3.1.33, created on 2019-10-31 19:42:31
  from '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/peliculaslogged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb2b177517d9_32049888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c714dc78bebb9332ee5f449ec4ad3bfe1298226a' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/peliculaslogged.tpl',
      1 => 1572537181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerlogged.tpl' => 1,
    'file:pelicula.tpl' => 1,
    'file:listapeliculas.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb2b177517d9_32049888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerlogged.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:pelicula.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:listapeliculas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="bloque-contenido pt-1">
    <main class="pelis" role="main">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'lista_pelis', 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
              <article class="row" data=<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
>                
                  <div class="card mb-1" style="max-width: 650px;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['peli']->value->nombre_imagen;?>
 class="card-img" alt="img">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['peli']->value->nombre;?>
</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Genero: <?php echo $_smarty_tpl->tpl_vars['peli']->value->genero;?>
</h6>
                          <h6 class="card-subtitle mb-2 text-muted">Duracion: <?php echo $_smarty_tpl->tpl_vars['peli']->value->duracion;?>
</h6>
                          <p class="card-text">Sinopsis: <?php echo $_smarty_tpl->tpl_vars['peli']->value->sinopsis;?>
</p>
                          <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="btn btn-primary">ELIMININAR</a>
                          <a href="editar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="btn btn-primary">MODIFICAR</a>
                          </div>
                      </div>
                    </div>
                  </div> 
              </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </main>
    <form action="POST">
        <div class="rounded border border-success my-1 mx-1">
          <input type="text" class="form-control " placeholder="NOMBRE PELICULA" aria-label="NOMBRE PELICULA" aria-describedby="basic-addon1" name="nombre">
          <input type="text" class="form-control " placeholder="SINOPSIS" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">
		</div>
        <div class="btn-group my-1 mx-1 rounded border border-success"  role="group " >
            <input type="time" class="form-control mr-1" placeholder="DURACION" aria-label="DURACION" aria-describedby="basic-addon1" name="duracion">
            <input type="text" class="form-control mr-1" placeholder="GENERO" aria-label="GENERO" aria-describedby="basic-addon1" name="genero">
            <input type="text" class="form-control mr-1" placeholder="DIR IMAGEN" aria-label="DIR IMAGEN" aria-describedby="basic-addon1" name="nombre_imagen">
        </div>
        <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
            <button type="button" class="btn bg-success text-white" name="btnIngresar">Ingresar</button>
            <button type="button" class="btn bg-success text-white oculto" name="btnGuardar">Guardar modificación</button>
        </div>
    </form>
</div> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

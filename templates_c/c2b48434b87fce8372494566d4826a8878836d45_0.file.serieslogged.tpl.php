<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:09:36
  from '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/serieslogged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb5ba05fd8c9_01032484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2b48434b87fce8372494566d4826a8878836d45' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/serieslogged.tpl',
      1 => 1572559767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:seriespresentacion.tpl' => 1,
    'file:logged.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb5ba05fd8c9_01032484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:seriespresentacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container pt-3">
    <h2 class="display-3 lead">Series</h2>
    <div class="marco">
        <div class="card-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'lista_serie', 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                <div class="card">
                    <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['serie']->value->nombre_imagen;?>
" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['serie']->value->nombre;?>
</h5>
                        <p class="card-text">Sinopsis: <?php echo $_smarty_tpl->tpl_vars['serie']->value->sinopsis;?>
</p>
                        <p class="card-text"><small class="text-muted">Temporadas: <?php echo $_smarty_tpl->tpl_vars['serie']->value->temporadas;?>
</small></p>
                        <p class="card-text"><small class="text-muted">Episosdios: <?php echo $_smarty_tpl->tpl_vars['serie']->value->episodios;?>
</small></p>
                        <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="btn btn-primary">ELIMININAR</a>
                        <a href="editar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="btn btn-primary">MODIFICAR</a>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <form action="POST">
                <div class="rounded border border-success my-1 mx-1">
                <input type="text" class="form-control " placeholder="NOMBRE SERIE" aria-label="NOMBRE SERIE" aria-describedby="basic-addon1" name="nombre">
                <input type="text" class="form-control " placeholder="SINOPSIS" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">
                </div>
                <div class="btn-group my-1 mx-1 rounded border border-success"  role="group " >
                    <input type="number" class="form-control mr-1" placeholder="TEMPORADAS" aria-label="TEMPORADAS" aria-describedby="basic-addon1" name="temporadas">
                    <input type="number" class="form-control mr-1" placeholder="EPISODIOS" aria-label="EPISODIOS" aria-describedby="basic-addon1" name="episodios">
                    <input type="text" class="form-control mr-1" placeholder="GENERO" aria-label="GENERO" aria-describedby="basic-addon1" name="genero">
                    <input type="text" class="form-control mr-1" placeholder="DIR IMAGEN" aria-label="DIR IMAGEN" aria-describedby="basic-addon1" name="nombre_imagen">
                </div>
                <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
                    <button type="button" class="btn bg-success text-white" name="btnIngresar">Ingresar</button>
                    <button type="button" class="btn bg-success text-white oculto" name="btnGuardar">Guardar modificación</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:logged.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

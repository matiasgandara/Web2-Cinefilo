<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:45:09
  from '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/listapeliculas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb55e5dd80e8_05675613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad2f2c37d54ef1c8fcc0dde58a089ab775626f1a' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/listapeliculas.tpl',
      1 => 1572558306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb55e5dd80e8_05675613 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bloque-contenido pt-1">
      <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categorias
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_categoria']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        <a class="dropdown-item" href="./peliculas/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</a>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
    <main class="pelis" role="main">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_peliculas']->value, 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
              <article class="row">                
                  <div class="card mb-1" style="max-width: 650px;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->nombre_imagen;?>
" class="card-img" alt="img">
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
</div> <?php }
}

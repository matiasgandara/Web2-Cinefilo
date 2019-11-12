<?php
/* Smarty version 3.1.33, created on 2019-11-08 20:39:47
  from 'C:\xampp\htdocs\proyectos\Web2-Cinefilo\templates\listaseries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc5c483e8c631_06401575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126e2981bcca87531de3dd72c4e7200318c0c66e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2-Cinefilo\\templates\\listaseries.tpl',
      1 => 1573241980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc5c483e8c631_06401575 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_categoria']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <a class="dropdown-item" href="./series/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>

<div class="card-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_series']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
        <div class="card">
            <img class="card-img-top" src=<?php echo $_smarty_tpl->tpl_vars['serie']->value->nombre_imagen;?>
 alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['serie']->value->nombre;?>
</h5>
                <p class="card-text">Sinopsis: <?php echo $_smarty_tpl->tpl_vars['serie']->value->sinopsis;?>
</p>
                <p class="card-text"><small class="text-muted">Temporadas: <?php echo $_smarty_tpl->tpl_vars['serie']->value->temporadas;?>
</small></p>
                <p class="card-text"><small class="text-muted">Episosdios: <?php echo $_smarty_tpl->tpl_vars['serie']->value->episodios;?>
</small></p>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}

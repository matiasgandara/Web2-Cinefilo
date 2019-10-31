<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:15:51
  from 'C:\xampp\htdocs\proyectos\Web2-Cinefilo\templates\select_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb5d1740bfd3_51033434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9aa26d7cbb206c16f33ed5c67764a1ec395ab3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2-Cinefilo\\templates\\select_categorias.tpl',
      1 => 1572552443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb5d1740bfd3_51033434 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categorias
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_categoria']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        <a class="dropdown-item" href="peliculas/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</a>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div><?php }
}

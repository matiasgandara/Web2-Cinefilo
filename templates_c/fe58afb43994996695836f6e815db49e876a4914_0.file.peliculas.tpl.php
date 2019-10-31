<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:37:08
  from 'C:\xampp\htdocs\proyectos\Web2-Cinefilo\templates\peliculas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb62143ded96_45522885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe58afb43994996695836f6e815db49e876a4914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2-Cinefilo\\templates\\peliculas.tpl',
      1 => 1572548449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:peliculapresentacion.tpl' => 1,
    'file:listapeliculas.tpl' => 1,
    'file:login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb62143ded96_45522885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:peliculapresentacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:listapeliculas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

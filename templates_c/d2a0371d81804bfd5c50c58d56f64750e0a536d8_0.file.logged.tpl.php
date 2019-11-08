<?php
/* Smarty version 3.1.33, created on 2019-10-31 19:05:24
  from '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/logged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb2264c43c02_86506116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a0371d81804bfd5c50c58d56f64750e0a536d8' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/logged.tpl',
      1 => 1572545119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb2264c43c02_86506116 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid bg-dark">
    <p>Usuario : <?php echo $_smarty_tpl->tpl_vars['idlogin']->value;?>
 </p> 
    </div>
        <button class="btn btn-primary" method="GET"><a href="logout">LOG OUT</a></button>
    </div>
</div><?php }
}

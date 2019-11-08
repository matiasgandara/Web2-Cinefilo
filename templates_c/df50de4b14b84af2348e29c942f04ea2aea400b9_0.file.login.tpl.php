<?php
/* Smarty version 3.1.33, created on 2019-10-31 21:46:46
  from '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb4836b432f7_57199498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df50de4b14b84af2348e29c942f04ea2aea400b9' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE/Web2-Cinefilo/templates/login.tpl',
      1 => 1572554803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb4836b432f7_57199498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container" class="dropdown-menu">
    <form action="login" method="POST">
        <div class="bg-secondary text-white px-4 py-2">
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Ingresá tu Usuario</label>
            <input type="text" class="form-control" name="user" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword2">Ingresá el Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" value="login">Login</button>
        </div>
    </form>
    
</div><?php }
}

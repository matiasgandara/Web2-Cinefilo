<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:36:50
  from 'C:\xampp\htdocs\proyectos\Web2-Cinefilo\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb620254dd79_38885739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2b06e2ac699a4309be29041498ea027b041384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2-Cinefilo\\templates\\login.tpl',
      1 => 1572557719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb620254dd79_38885739 (Smarty_Internal_Template $_smarty_tpl) {
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
        <button type="submit" class="btn btn-primary" value="LOGIN">Login</button>
        </div>
    </form>
    
</div><?php }
}

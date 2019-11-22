{include file="headeradmin.tpl"}
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Admin</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>
  {foreach $listauser as $us}
    <tr>
      <td>{$us->nombre_usuario}</td>
      <td>{$us->administrador}</td>
      <td><button type="submit" class="btn btn-primary" href="darAdmin">Cambiar</button></td>
    </tr>
    {/foreach}
  </tbody>
</table>
{include file="logged.tpl"}
{include file="footer.tpl"}
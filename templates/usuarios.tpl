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
  {foreach from=$lista item=us}
    <tr>
      <td>{$us->nombre_usuario}</td>
      <td>{$us->administrador}</td>
      <td><a method="GET" href="darAdmin/{$us->id}" class="btn btn-primary">Cambiar</a></td>
    </tr>
    {/foreach}
  </tbody>
</table>
{include file="logged.tpl"}
{include file="footer.tpl"}
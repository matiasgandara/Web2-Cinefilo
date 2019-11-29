{include file="headeradmin.tpl"}
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ELIMINAR</th>
      <th scope="col">Nombre</th>
      <th scope="col">Admin</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$lista item=us}
    <tr>
      <td><a method="GET" href="borrar_usuario/{$us->id}" class="btn btn-primary">X</a></td>
      <td>{$us->nombre_usuario}</td>
      <td>{$us->administrador}</td>
      <td><a method="GET" href="darAdmin/{$us->id}" class="btn btn-primary">Dar Admin</a></td>
      <td><a method="GET" href="quitarAdmin/{$us->id}" class="btn btn-primary">Quitar Admin</a></td>
    </tr>
    {/foreach}
  </tbody>
</table>
{include file="logged.tpl"}
{include file="footer.tpl"}
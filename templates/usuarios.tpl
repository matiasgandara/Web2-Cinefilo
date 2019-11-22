{include file="headeradmin.tpl"}
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">Borrar</th>
      <th scope="col">Id</th>
      <th scope="col">Genero</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>
  {foreach $categorias as $categoria}
    <tr>
      <th scope="row"><a method="GET" href="borrar_categoria/{$categoria->id}" class="btn btn-primary"> X </a></th>
      <td>{$categoria->id}</td>
      <td>{$categoria->genero}</td>
      <td><input type="text" class="form-control " placeholder="GENERO" aria-describedby="basic-addon1" name="genero" action="editar_categoria" method="POST">
        <a method="POST" href="editar_categoria/{$categoria->id}" class="btn btn-primary">Modificar</a>
        </td>
    </tr>
    {/foreach}
  </tbody>
</table>
{include file="logged.tpl"}
{include file="footer.tpl"}
{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="container">
    {include file="seriedatos.tpl"}
    {include file="imagenesAdmin.tpl"}
    <form action="editar_serie/{$film->id}" method="POST" enctype="multipart/form-data">
        <div class="rounded border border-success my-1 mx-1">
          <input type="text" class="form-control " value="{$film->nombre}" aria-label="NOMBRE SERIE" aria-describedby="basic-addon1" name="nombre">
          <input type="text" class="form-control " value="{$film->sinopsis}" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">
		</div>
        <div class="btn-group my-1 mx-1 rounded border border-success"  role="group ">
            <input type="numeric" class="form-control mr-1" value="{$film->temporadas}" aria-label="TEMPORADAS" aria-describedby="basic-addon1" name="temporadas">
            <input type="numeric" class="form-control mr-1" value="{$film->episodios}" aria-label="EPISODIOS" aria-describedby="basic-addon1" name="episodios">
        </div>
        <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
            <button type="submit" value="editar_serie/{$film->id}" class="btn bg-success text-white" name="btnGuardar">Guardar</button>
        </div>
    </form>
    {include file="cargarimagenes.tpl"}   
</div>
{include file="vue/comentariosadmin.tpl"} 
{include file="logged.tpl"}
{include file="footer.tpl"}
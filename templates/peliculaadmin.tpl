{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="container">
    <div class="bloque-contenido pt-1">
            {include file="peliculadatos.tpl"}
            {include file="imagenesAdmin.tpl"}
            <div class="container">
                <form action="editar_pelicula/{$film->id}" method="POST">
                    <div class="rounded border border-success my-1 mx-1">
                    <input type="text" class="form-control " value="{$film->nombre}" aria-label="NOMBRE PELICULA" aria-describedby="basic-addon1" name="nombre">
                    <input type="text" class="form-control " value="{$film->sinopsis}" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">

                    </div>
                    <div class="btn-group my-1 mx-1 rounded border border-success"  role="group ">
                        <input type="time" class="form-control mr-1" value="{$film->duracion}" aria-label="DURACION" aria-describedby="basic-addon1" name="duracion">
                    </div>
                    <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
                        <button type="submit" value="editar_pelicula/{$film->id}" class="btn bg-success text-white" name="btnGuardar">Guardar</button>
                    </div>
                </form>
                {include file="cargarimagenes.tpl"}
        </div>
    </div>  
</div> 
{include file="vue/comentariosadmin.tpl"}
{include file="logged.tpl"}
{include file="footer.tpl"}
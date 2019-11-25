{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="card-group">
        <div class="card">
            {include file="carruselfilm.tpl"}
            <div class="card-body">
                <h5 class="card-title">{$film->nombre}</h5>
                <p class="card-text">Sinopsis: {$film->sinopsis}</p>
                <p class="card-text"><small class="text-muted">Temporadas: {$film->temporadas}</small></p>
                <p class="card-text"><small class="text-muted">Episosdios: {$film->episodios}</small></p>
            </div>
        </div>
</div>
 <form action="editar_serie" method="POST" enctype="multipart/form-data">
        <div class="rounded border border-success my-1 mx-1">
          <input type="text" class="form-control " placeholder="{$film->nombre}" aria-label="NOMBRE SERIE" aria-describedby="basic-addon1" name="nombre">
          <input type="text" class="form-control " placeholder="{$film->sinopsis}" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">

		</div>
        <div class="btn-group my-1 mx-1 rounded border border-success"  role="group ">
            <input type="numeric" class="form-control mr-1" placeholder="{$film->temporadas}" aria-label="TEMPORADAS" aria-describedby="basic-addon1" name="temporadas">
            <input type="numeric" class="form-control mr-1" placeholder="{$film->episodios}" aria-label="EPISODIOS" aria-describedby="basic-addon1" name="episodios">
            <select class="form-control" name="genero">
                <option disabled selected value="" hidden>GENERO</option>
                  {foreach $lista_categoria as $categoria} 
                      <option>{$categoria->genero}</option>
                  {/foreach}
            </select> 
            <input type="text" class="form-control mr-1" placeholder="DIR IMAGEN" aria-label="DIR IMAGEN" aria-describedby="basic-addon1" name="nombre_imagen">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Subir</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="imgSerie" name="imagen">{*  creo q el id es el del film *}
                <label class="custom-file-label" for="inputGroupFile01">Seleccinar Archivo</label>
            </div>
        </div>
        <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
            <button type="submit" value="editar_pelicula" class="btn bg-success text-white" name="btnGuardar">Guardar</button>
        </div>
    </form>
{include file="vue/comentarios.tpl"} 
{include file="footer.tpl"}
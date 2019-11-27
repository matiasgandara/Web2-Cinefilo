{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="bloque-contenido pt-1">
    <main class="films" role="main">
        <article class="row" data={$film->id}>                
            <div class="card mb-1" style="max-width: 650px;">
                <div class="row no-gutters">
                    {include file="carruselfilm.tpl"}
                    
                   {*  <div class="col-md-3">
                        <img src={$film->nombre_imagen} class="card-img" alt="img">
                    </div> *}
                    <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title" data="{$film->id}" id="id_pelicula"> {$film->nombre}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Genero: {$film->genero}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">Duracion: {$film->duracion}</h6>
                          <p class="card-text">Sinopsis: {$film->sinopsis}</p>
                        </div>
                    </div>
                </div>
            </div> 
        </article>
    </main>

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
   {include file="vue/comentariosadmin.tpl"} 

  </div> 
</div>  


{include file="footer.tpl"}
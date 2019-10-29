{include file="headerlogged.tpl"}
{include file="pelicula.tpl"}
{include file="listapeliculas.tpl"}
<div class="bloque-contenido pt-1">
    <main class="pelis" role="main">
            {foreach from=lista_pelis item=peli}
              <article class="row" data={$peli->id}>                
                  <div class="card mb-1" style="max-width: 650px;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <img src={$peli->nombre_imagen} class="card-img" alt="img">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title">{$peli->nombre}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Genero: {$peli->genero}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">Duracion: {$peli->duracion}</h6>
                          <p class="card-text">Sinopsis: {$peli->sinopsis}</p>
                          <a href="eliminar/{$peli->id}" class="btn btn-primary">ELIMININAR</a>
                          <a href="editar/{$peli->id}" class="btn btn-primary">MODIFICAR</a>
                          </div>
                      </div>
                    </div>
                  </div> 
              </article>
            {/foreach}
    </main>
    <form action="POST">
        <div class="rounded border border-success my-1 mx-1">
          <input type="text" class="form-control " placeholder="NOMBRE PELICULA" aria-label="NOMBRE PELICULA" aria-describedby="basic-addon1" name="nombre">
          <input type="text" class="form-control " placeholder="SINOPSIS" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">
		</div>
        <div class="btn-group my-1 mx-1 rounded border border-success"  role="group " >
            <input type="time" class="form-control mr-1" placeholder="DURACION" aria-label="DURACION" aria-describedby="basic-addon1" name="duracion">
            <input type="text" class="form-control mr-1" placeholder="GENERO" aria-label="GENERO" aria-describedby="basic-addon1" name="genero">
            <input type="text" class="form-control mr-1" placeholder="DIR IMAGEN" aria-label="DIR IMAGEN" aria-describedby="basic-addon1" name="nombre_imagen">
        </div>
        <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
            <button type="button" class="btn bg-success text-white" name="btnIngresar">Ingresar</button>
            <button type="button" class="btn bg-success text-white oculto" name="btnGuardar">Guardar modificación</button>
        </div>
    </form>
</div> 
{include file="footer.tpl"}
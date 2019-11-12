{include file="header.tpl"}
{include file="peliculapresentacion.tpl"}
<div class="bloque-contenido pt-1">
    <main class="pelis" role="main">
            {foreach $lista_peliculas as $peli}
              <article class="row" data={$peli->id}>                
                  <div class="card mb-1" style="max-width: 650px;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <img src={$peli->nombre_imagen} class="card-img" alt="img">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title"> <a href="pelicula/{$peli->id}>{$peli->nombre}</a></h5>
                          <h6 class="card-subtitle mb-2 text-muted">Genero: {$peli->genero}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">Duracion: {$peli->duracion}</h6>
                          <p class="card-text">Sinopsis: {$peli->sinopsis}</p>
                          <a method="GET" href="borrar_pelicula/{$peli->id}" class="btn btn-primary">ELIMININAR</a>
                        </div>
                      </div>
                    </div>
                  </div> 
              </article>
            {/foreach}
    </main>
    <form action="insertar_pelicula" method="POST">
        <div class="rounded border border-success my-1 mx-1">
          <input type="text" class="form-control " placeholder="NOMBRE PELICULA" aria-label="NOMBRE PELICULA" aria-describedby="basic-addon1" name="nombre">
          <input type="text" class="form-control " placeholder="SINOPSIS" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">
		</div>
        <div class="btn-group my-1 mx-1 rounded border border-success"  role="group " >
            <input type="time" class="form-control mr-1" placeholder="DURACION" aria-label="DURACION" aria-describedby="basic-addon1" name="duracion">
            <select class="form-control" name="genero">
                <option disabled selected value="" hidden>GENERO</option>
                  {foreach $lista_categoria as $categoria} 
                      <option>{$categoria->genero}</option>
                  {/foreach}
            </select> 
            <input type="text" class="form-control mr-1" placeholder="DIR IMAGEN" aria-label="DIR IMAGEN" aria-describedby="basic-addon1" name="nombre_imagen">
        </div>
        <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
            <button type="submit" value="insertar_pelicula" class="btn bg-success text-white" name="btnIngresar">Ingresar</button>
        </div>
    </form>
  </div> 
</div>  
{include file="logged.tpl"}
{include file="footer.tpl"}
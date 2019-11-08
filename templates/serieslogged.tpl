{include file="header.tpl"}
{include file="seriespresentacion.tpl"}
<div class="container pt-3">
    <h2 class="display-3 lead">Series</h2>
    <div class="marco">
        <div class="card-group">
            {foreach $lista_series as $serie}
                <div class="card">
                    <img class="card-img-top" src="{$serie->nombre_imagen}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{$serie->nombre}</h5>
                        <p class="card-text">Sinopsis: {$serie->sinopsis}</p>
                        <p class="card-text"><small class="text-muted">Temporadas: {$serie->temporadas}</small></p>
                        <p class="card-text"><small class="text-muted">Episosdios: {$serie->episodios}</small></p>
                        <a method="GET" href="borrar_serie/{$serie->id}" class="btn btn-primary">ELIMININAR</a>
                        <a method="POST" href="editar_serie/{$serie->id}" class="btn btn-primary">MODIFICAR</a>
                    </div>
                </div>
            {/foreach}
         <div class="container pt-3">   
            <form action="insertar_serie" method="POST">
                <div class="rounded border border-success my-1 mx-1">
                <input type="text" class="form-control " placeholder="NOMBRE SERIE" aria-label="NOMBRE SERIE" aria-describedby="basic-addon1" name="nombre">
                <input type="text" class="form-control " placeholder="SINOPSIS" aria-label="SINOPSIS" aria-describedby="basic-addon1" name="sinopsis">
                </div>
                <div class="btn-group my-1 mx-1 rounded border border-success"  role="group " >
                    <input type="number" class="form-control mr-1" placeholder="TEMPORADAS" aria-label="TEMPORADAS" aria-describedby="basic-addon1" name="temporadas">
                    <input type="number" class="form-control mr-1" placeholder="EPISODIOS" aria-label="EPISODIOS" aria-describedby="basic-addon1" name="episodios">
                    <input type="text" class="form-control mr-1" placeholder="GENERO" aria-label="GENERO" aria-describedby="basic-addon1" name="genero">
                    <input type="text" class="form-control mr-1" placeholder="DIR IMAGEN" aria-label="DIR IMAGEN" aria-describedby="basic-addon1" name="nombre_imagen">
                </div>
                <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
                    <button type="submit" value="insertar_serie" class="btn bg-success text-white" name="btnIngresar">Ingresar</button>
                    <button type="button" class="btn bg-success text-white oculto" name="btnGuardar">Guardar modificación</button>
                </div>
            </form>
         </div>   
        </div>
    </div>
</div>
{include file="logged.tpl"}
{include file="footer.tpl"}
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
                          <h5 class="card-title" id="id_pelicula" data="{$film->id}">{$film->nombre}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Genero: {$film->genero}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">Duracion: {$film->duracion}</h6>
                          <p class="card-text">Sinopsis: {$film->sinopsis}</p>
                        </div>
                    </div>
                </div>
            </div> 
        </article>
    </main>
    </div> 
{include file="vue/comentarios.tpl"} 
{include file="footer.tpl"}
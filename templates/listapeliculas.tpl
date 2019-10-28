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
                          </div>
                      </div>
                    </div>
                  </div> 
              </article>
            {/foreach}
    </main>
  </div> 
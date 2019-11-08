<div class="bloque-contenido pt-1">
   {* {include file="select_categorias.tpl"} *}
   <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        {foreach $lista_categoria as $categoria}
          <a class="dropdown-item" href="./peliculas/{$categoria->id}">{$categoria->genero}</a>
        {/foreach}
      </div>
    </div>
    <main class="pelis" role="main">
            {foreach $lista_peliculas as $peli}
              <article class="row">                
                  <div class="card mb-1" style="max-width: 650px;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <img src="{$peli->nombre_imagen}" class="card-img" alt="img">
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
</div> 
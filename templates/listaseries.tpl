 <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        {foreach $lista_categoria as $categoria}
          <a class="dropdown-item" href="./series/{$categoria->id}">{$categoria->genero}</a>
        {/foreach}
      </div>
    </div>

{* {include file="select_categorias.tpl"} *}
<div class="card-group">
    {foreach $lista_series as $serie}
        <div class="card">
            <img class="card-img-top" src={$serie->nombre_imagen} alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{$serie->nombre}</h5>
                <p class="card-text">Sinopsis: {$serie->sinopsis}</p>
                <p class="card-text"><small class="text-muted">Temporadas: {$serie->temporadas}</small></p>
                <p class="card-text"><small class="text-muted">Episosdios: {$serie->episodios}</small></p>
            </div>
        </div>
    {/foreach}
</div>
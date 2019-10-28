<div class="card-group">
    {{foreach from=lista_serie item=serie}
        <div class="card">
            <img class="card-img-top" src={$peli->nombre_imagen} alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{$peli->nombre}</h5>
            <p class="card-text">Sinopsis: {$peli->sinopsis}</p>
            <p class="card-text"><small class="text-muted">{$peli->temporadas}</small></p>
            <p class="card-text"><small class="text-muted">{$peli->episodios}</small></p>
            </div>
        </div>
    {/foreach}}
</div>
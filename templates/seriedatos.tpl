<div class="card mb-3">
    {include file="carruselfilm.tpl"}           
        <div class="card-body">
            <h5 class="card-title" id = "id_film" data="{$film->id}">{$film->nombre}</h5>
            <p class="card-text">Sinopsis: {$film->sinopsis}</p>
            <p class="card-text"><small class="text-muted">Temporadas: {$film->temporadas}</small></p>
            <p class="card-text"><small class="text-muted">Episosdios: {$film->episodios}</small></p>
            <p class="card-text"><small class="text-muted">Puntuacion: {$promedio}</small></p>
        </div>
    </div>
</div>
 
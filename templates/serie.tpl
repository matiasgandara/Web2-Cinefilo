{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="card-group">
        <div class="card">
            {include file="carruselfilm.tpl"}
            <div class="card-body">
                <h5 class="card-title" id = "id_serie" data="{$film->id}">{$film->nombre}</h5>
                <p class="card-text">Sinopsis: {$film->sinopsis}</p>
                <p class="card-text"><small class="text-muted">Temporadas: {$film->temporadas}</small></p>
                <p class="card-text"><small class="text-muted">Episosdios: {$film->episodios}</small></p>
            </div>
        </div>
</div>
{include file="vue/comentarios.tpl"} 
{include file="footer.tpl"}
{include file="header.tpl"}
{include file="seriespresentacion.tpl"}
<div class="container pt-3">
    <h2 class="display-3 lead">Series</h2>
    <div class="container">
        <div class="card-group">
            {foreach $lista_series as $serie}
                <div class="card">
                    <img class="card-img-top" src="{$serie->nombre_imagen}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="serie/{$serie->id}">{$serie->nombre}</a></h5>
                        <p class="card-text">Sinopsis: {$serie->sinopsis}</p>
                        <p class="card-text"><small class="text-muted">Temporadas: {$serie->temporadas}</small></p>
                        <p class="card-text"><small class="text-muted">Episosdios: {$serie->episodios}</small></p>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</div>
{include file="logged.tpl"}
{include file="footer.tpl"}
{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="card-group">
        <div class="card">
            {include file="carruselfilm.tpl"}
            <div class="card-body">
            {foreach $film as $f}
                <h5 class="card-title" id = "id_serie" data="{$f->id}">{$f->nombre}</h5>
                <p class="card-text">Sinopsis: {$f->sinopsis}</p>
                <p class="card-text"><small class="text-muted">Temporadas: {$f->temporadas}</small></p>
                <p class="card-text"><small class="text-muted">Episosdios: {$f->episodios}</small></p>
            {/foreach}
            </div>
        </div>
</div>
{include file="vue/comentarios.tpl"} 
{include file="footer.tpl"}
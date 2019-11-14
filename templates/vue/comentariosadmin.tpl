{include file="comenta.tpl"}
    {*  cargo los comentarios de los usuarios *}
{literal}
    <div id="vue_comentarios">      
        <div v-for="comentario in comentarios" class="card w-75">
            <div class="card-body">
                <h5 class="card-title">{{comentario.nombre_usuario}}</h5>
                <p class="card-text">{{comentario.comentario}}</p>
                <h6>Puntuacion<span class="badge badge-secondary">{{comentario.puntuacion}}</span></h6>
                <button class="btn btn-primary btn_borrar">ELIMININAR</button>
            </div>
        </div>  
    </div>
{/literal}
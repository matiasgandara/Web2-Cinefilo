<div class="container">
    <div class="row">
        <div class="col-md-9">
            {include file="vue/comenta.tpl"}
                {literal}
                    <h3>EL PROMEDIO ES......{{promedio}}</h3>
                    <div id="vue_comentarios" class="marco">      
                        <div v-for="comentario in comentarios" class="card w-75">
                            <div class="card-body">
                                <h5 class="card-title">{{comentario.nombre_usuario}}</h5>
                                <p class="card-text">{{comentario.comentario}}</p>
                                <h6>Puntuacion<span class="badge badge-secondary">{{comentario.puntuacion}}</span></h6>
                            </div>
                        </div>  
                    </div>  
                {/literal}  
        </div>
    </div>
</div>
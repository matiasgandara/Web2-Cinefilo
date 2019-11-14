{include file="headervue.tpl"}
{include file="presentacion.tpl"}
<div class="bloque-contenido pt-1">
    <main class="films" role="main">
        <article class="row" data={$film->id}>                
            <div class="card mb-1" style="max-width: 650px;">
                <div class="row no-gutters">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                       {* <ol class="carousel-indicators">
                         {for $img=0 to $imagenes}
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol> *}
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="image/{$film->nombre_imagen}">
                            </div>
                            {foreach $imagenes as $img}                     
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="image/{$img->dir_imagen}">
                                </div>
                            {/foreach}
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                
                   {*  <div class="col-md-3">
                        <img src={$film->nombre_imagen} class="card-img" alt="img">
                    </div> *}
                    <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title"> <a href="filmcula/{$film->id}>{$film->nombre}</a></h5>
                          <h6 class="card-subtitle mb-2 text-muted">Genero: {$film->genero}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">Duracion: {$film->duracion}</h6>
                          <p class="card-text">Sinopsis: {$film->sinopsis}</p>
                        </div>
                    </div>
                </div>
            </div> 
        </article>
    </main>


  

   {include file="vue/comentarios.tpl"} 

  </div> 
</div>  


{include file="footer.tpl"}
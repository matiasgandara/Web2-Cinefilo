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
                
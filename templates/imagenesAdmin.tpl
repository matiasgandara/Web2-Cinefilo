
<div class="card-group">
        {foreach $imagenes as $img} 
            <div class="card" style="width: 18rem;">
                <img class="card-img-top"  src="{$img->dir_imagen}" alt="Card image cap">
                <div class="card-body">
                    <a method="GET" href="eliminarImagen/{$img->id}" class="btn btn-primary">ELIMININAR</a>
                </div>
            </div>
        {/foreach}
</div>
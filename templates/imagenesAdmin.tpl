
<div class="card" style="width: 18rem;">
    {foreach $imagenes as $img} 
        <img class="card-img-top"  src="{$img->dir_imagen}" alt="Card image cap">
        <div class="card-body">
            <a method="GET" href="eliminarImagen/{$img->id}" class="btn btn-primary">ELIMININAR</a>
        </div>
    {/foreach}
</div>
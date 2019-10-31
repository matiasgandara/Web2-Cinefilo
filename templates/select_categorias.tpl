<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categorias
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      {foreach $lista_categoria as $categoria}
        <a class="dropdown-item" href="peliculas/{$categoria->id}">{$categoria->genero}</a>
      {/foreach}
    </div>
  </div>
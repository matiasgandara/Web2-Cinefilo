<select class="custom-select">
<option selected>Todas las categorias</option>
    {foreach $lista_categoria as $tipo}     
      <option value={$tipo->genero}>{$tipo->genero}</option>
    {/foreach}
</select>
<select class="custom-select">
<option selected>Todas las categorias</option>
    {foreach from=categorias item=tipo}     
      <option value={$tipo->id}>{$tipo->nombre}</option>
    {/foreach}
</select>
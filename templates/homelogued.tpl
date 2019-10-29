{include file="header.tpl"}
{include file="home.tpl"}
    <form>
            {foreach from=$categorias item=categoria}
            {if $user->finalizada eq 1}
                <strike><li>{$tarea->titulo}: {$tarea->descripcion}</li></strike>
            {else}
                <li>{$tarea->titulo}: {$tarea->descripcion} - <a href='finalizar/{$tarea->id}'>Finalizar</a> - <a href='borrar/{$tarea->id}'>Borrar</a></li>
            {/if}
            
            {/foreach}

            <form action="insertar" method="post">
            <input type="text" name="titulo" placeholder="Titulo">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="number" name="prioridad"  max="10">
            <input type="checkbox" name="finalizada" id="finalizada">
            <input type="submit" value="Insertar">
    </form>

{include file="logged.tpl"}
{include file="footer.tpl"}

    <form id="form_comentario" action="insertar" method="POST">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="nombre_usuario" data="{$idlogin}">Comenta!!!{$idlogin}</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" id="comentario" data="{$film->id}"></textarea>
            <label for="exampleFormControlSelect1">Puntuacion</label>
            <select class="form-control" id="puntuacion"> {* ver hubicacion *}
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <button type="submit" class="btn btn-primary" value="insertar">Comentar</button>
        </div>
    </form>
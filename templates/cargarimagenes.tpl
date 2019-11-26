 <form action="insertar_imagenes" method="POST" enctype="multipart/form-data"> 
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Subir</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="imgPeli" name="imagenes[]" multiple>
            <label class="custom-file-label" for="inputGroupFile01">Seleccinar Archivo</label>
        </div>
    </div>
    <div class="btn-group py-2 px-1 container"  role="group" aria-label="Basic example "  class="justify-content-center">
            <button type="submit" value="insertar_imagenes/{$film->id}" class="btn bg-success text-white" name="btnGuardar">Cargar</button>
    </div>
<form>
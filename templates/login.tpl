<div class="container" class="dropdown-menu">
    <form action="login" method="POST">
        <div class="bg-secondary text-white px-4 py-2">
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Ingresá tu Usuario</label>
            <input type="text" class="form-control" name="user" id="exampleDropdownFormEmail2" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword2">Ingresá el Password</label>
            <input type="password" class="form-control" name="pass" id="exampleDropdownFormPassword2" placeholder="Password">
        </div>
        {{* <div class="form-group">
            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
            <label class="form-check-label" for="dropdownCheck2">
                Recuérdame
            </label>
            </div>
        </div> *}}
        <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <button class="btn btn-primary"><a href="registro"> Registrarse</a></button>
  </div>
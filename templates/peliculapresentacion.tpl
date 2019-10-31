      <!-- Inicio presentación -->

      <div class="container-fluid bg-primary py-1">
        <div class="row text-center presentacion">
          <div class="col-12 ld-4 py-1">
            <img src="image/cine.jpg" alt="Imagen de un cine. Responsive image">
          </div>
        </div>
        <div class="container pb-1">
          <div class="row ">


            <div class="col md-3">
              <div class="text-center">
                <button type="button " class="btn btn-success btn-lg" href=""> <span class="text-light">Inicio</span></button>
              </div>
            </div>
            <div class="col md-3 "> </div>
            <div class="col md-3 "> </div>
            <div class="col md-3 ">
              <div class="text-center">
                <button type="button " class="btn btn-success btn-lg" href="series"><span class="text-light">Series</span></button>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- FIN PRESENTACIÓN -->
      <!-- Inicio main -->
      <div class="container">
        <div class="row">

          <div class="col-md-7">
            <h1 class="display-4 lead">Últimas noticias</h1>
            <hr>

            <!-- Inicio carrusel -->
            <div class="row justify-content-center">
              <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                  </ol>
                  <div class="carousel-inner">
                    {foreach $lista_peliculas as $pelicula}          
                      <div class="carousel-item">
                        <img src={$pelicula->nombre_imagen} class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>{$pelicula->nombre}</h5>
                        </div>
                      </div>
                    {/foreach}
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>        
              <!-- FIN CARRUSEL -->
    
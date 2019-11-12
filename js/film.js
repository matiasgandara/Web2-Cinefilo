"use strict"

// event listeners
document.querySelector("#formPelicula").addEventListener('submit', editPelicula);
document.querySelector("#formSerie").addEventListener('submit', editSerie);
// define la app Vue
let app = new Vue({
    el: "#template-vue-film",
    data: {
        subtitle: " ",
        film: [], 
    }
});

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getFilm(id) {
    fetch("api/getFilm/" . id)
    .then(response => response.json())
    .then(film => {
        app.film = film; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function editSerie(film) {
    film.preventDefault();
    idserie = document.querySelector("idSerie").value;
    
    let data = {
        id: idserie,
        genero:  document.querySelector("input[name=genero]").value,
        nombre:  document.querySelector("input[name=nombre]").value,
        sinopsis:  document.querySelector("input[name=sinopsis]").value,
        temporadas:  document.querySelector("input[name=temporadas]").value,
        episodios:  document.querySelector("input[name=episodios]").value

    }

    fetch('api/editar_serie', {
        method: 'PUT',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getFilm(id);
     })
     .catch(error => console.log(error));
}

// obtiene las tareas al iniciio
getFilm(id);

"use strict"

// event listeners
document.querySelector("#form_comentario").addEventListener('submit', addComentario);
document.querySelector(".btn_borrar").addEventListener('submit', borrarComentario);
// define la app Vue
let app = new Vue({
    el: "#vue_comentarios",
    data: {
        comentarios: [], 
    }
});

    function getComentarios(){
        fetch("api/comentarios")
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios;
        })
    .catch(error => console.log(error));

    }

    function addComentario(e){
        e.preventDefault();
        
        let data = {
            id_film:  document.querySelector("#comentario").getAttribute('data'),
            nombre_usuario:  document.querySelector("#nombre_usuario").getAttribute('data'),
            comentario:  document.querySelector("#comentario").value,
            puntuacion:  document.querySelector("#puntuacion").value
        }
    
        fetch('api/comentarios', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},       
            body: JSON.stringify(data) 
         })
         .then(response => {
             getComentarios();
         })
         .catch(error => console.log(error));
    }
    



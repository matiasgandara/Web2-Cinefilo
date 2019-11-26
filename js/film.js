"use strict"

// event listeners
document.querySelector("#form_comentario").addEventListener('submit', addComentario);
/* document.querySelector(".btn_borrar").addEventListener('submit', borrarComentario); */
let idcom = document.querySelector("#id_serie").getAttribute('data');
// define la app Vue
let app = new Vue({
    el: "#vue_comentarios",
    data: {
        comentarios: [], 
    }
});

    function getComentarios(){
        let apicom = "api/comentarios/" + idcom;
        fetch(apicom)
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios;
        })
    .catch(error => console.log(error));

    }

    function addComentario(){
        /* e.preventDefault(); */ 
        let apicom = "api/comentario/" + idcom;
        
        let data = {
            id_film:  document.querySelector("#id_serie").getAttribute('data'),
            nombre_usuario:  document.querySelector("#nombre_usuario").getAttribute('data'),
            comentario:  document.querySelector("#comentario").value,
            puntuacion:  document.querySelector("#puntuacion").value
        }
    
        fetch( apicom, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},       
            body: JSON.stringify(data) 
         })
         .then(response => {
             getComentarios();
         })
         .catch(error => console.log(error));
    }
    
getComentarios();


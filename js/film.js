"use strict"

// event listeners
document.querySelector("#form_comentario").addEventListener('submit', addComentario);
/* document.querySelector(".btn_borrar").addEventListener('submit', borrarComentario); */
let idcom = document.querySelector("#id_film").getAttribute('data');
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

    function addComentario(e){
        e.preventDefault();

       let data = {
            "id_film":  document.querySelector("#id_film").getAttribute('data'),
            "nombre_usuario":  document.querySelector("#nombre_usuario").getAttribute('data'),
            "comentario":  document.querySelector("#comentario").value,
            "puntuacion":  document.querySelector("#puntuacion").value
        }
        console.log(data);

        fetch( "api/comentario", {
            "method": "POST",
            "headers": {"Content-Type": "application/json"},       
            "body": JSON.stringify(data)
         })
         .then(response => {

            console.log("llega?");
             getComentarios();
         })
         .catch(error => console.log(error));
    }

    function deleteComentario(){
        let apicom = "api/comentarios/" + idcom;

        fetch("apicom", {
            "method": 'DELETE',
            "headers": {'Content-Type': 'application/json'}       
        })
        .then(response => {
            getComentarios();
        })
        .catch(error => console.log(error));
    }


getComentarios();


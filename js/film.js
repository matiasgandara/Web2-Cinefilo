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
        let id_film = document.querySelector("#id_film").getAttribute('data');
        let nombre_usuario = document.querySelector("#nombre_usuario").getAttribute('data');
        let comentario = document.querySelector("#comentario").value;
        let puntuacion = document.querySelector("#puntuacion").value;


        let id_film = document.querySelector("#id_film").getAttribute('data');
        let nombre_usuario = document.querySelector("#nombre_usuario").getAttribute('data');
        let comentario  =  document.querySelector("#comentario").value;
        let puntuacion = document.querySelector("#puntuacion").value;

       let data = {
<<<<<<< HEAD
            "id_film": id_film,
            "nombre_usuario": nombre_usuario,
            "comentario": comentario,
            "puntuacion": puntuacion
=======
            "id_film":  id_film,
            "nombre_usuario": nombre_usuario,
            "comentario":  comentario,
            "puntuacion":  puntuacion
>>>>>>> 0ba0e6b28217cf892510d31d9af68f1082bab966
        }
        console.log(data);
        let Ulr = encodeURI("api/comentario")

<<<<<<< HEAD
        let url = encodeURI("api/comentario");

        fetch(url, {
=======
        fetch(Url, {
>>>>>>> 0ba0e6b28217cf892510d31d9af68f1082bab966
            "method": "POST",
            "headers": {"Content-Type": "application/json"},       
            "body": JSON.stringify(data)
        })
        .then(response => {
             if(!response.ok){
                console.log("error");
             }else{    
                return response.json();
             }
        }).then(() =>{
             getComentarios();
        }).catch(error => console.log(error));
    }

    function deleteComentario(){
        let apicom = "api/comentarios/" + idcom;

        fetch(apicom, {
            "method": 'DELETE',
            "headers": {'Content-Type': 'application/json'}       
        })
        .then(response => {
            getComentarios();
        })
        .catch(error => console.log(error));
    }


getComentarios();


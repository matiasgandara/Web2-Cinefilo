"use strict"


/* function agregarbtns(){

    let btns = document.querySelectorAll(".btn_borrar");

    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){

            let id = btns[i].getAttribute('data');
            let apicom = "api/comentario/"+id;

            fetch(apicom, {
                "method": 'DELETE',
                "headers": {'Content-Type': 'application/json'}       
            })
            .then(response => {
                getComentarios();
            })
            .catch(error => console.log(error));
        });
    } 
}; */

let idcom = document.querySelector("#id_film").getAttribute('data');
// define la app Vue
let app = new Vue({
    el: "#vue_comentarios",
    data: {
        comentarios: [], 
    },
    methods : {
        deleteComentario: function (idcomentario){
            borrarComentario(idcomentario);
        }
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
        let comentario  =  document.querySelector("#comentario").value;
        let puntuacion = document.querySelector("#puntuacion").value;

       let data = {
            "id_film": id_film,
            "nombre_usuario": nombre_usuario,
            "comentario": comentario,
            "puntuacion": puntuacion
        }
        let url = encodeURI("api/comentario");

        fetch(url, {
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
    };

    function borrarComentario(idcomen){
        let apicom = "api/comentario/"+idcomen;

            fetch(apicom, {
                "method": 'DELETE',
                "headers": {'Content-Type': 'application/json'}       
            })
            .then(response => {
                getComentarios();
            })
            .catch(error => console.log(error));
        
    }

    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector("#form_comentario").addEventListener('submit', addComentario);
        getComentarios();

     });



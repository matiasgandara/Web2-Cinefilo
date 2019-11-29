"use strict"

let idcom = document.querySelector("#id_film").getAttribute('data');
let comentario = null;
// define la app Vue
let app = new Vue({
    el: "#vue_comentarios",
    data: {
        comentarios: [], 
        promedio: 0,
    },
    methods : {
        deleteComentario: function (idcomentario){
            borrarComentario(idcomentario);
        },
        mostrarPromedio: function(){
            app.promedio = getPromedio();
        }
    }
});

    function getComentarios(){
        let apicom = "api/comentarios/" + idcom;
        fetch(apicom)
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios;
            getPromedio();
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

    function getPromedio(){
        let suma = 0;
        app.comentarios.forEach(elemento =>{
            suma+= parseInt(elemento.puntuacion);
        });
        if(suma != 0){
            let resultado = suma/app.comentarios.length;
            app.promedio = resultado;
        }
    }

    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector("#form_comentario").addEventListener('submit', addComentario);
        getComentarios();
        

     });
    




document.addEventListener("DOMContentLoaded", function(){
    "use strict";
    let baseURL = "http://localhost/proyectos/cinefilo3/";
    let container = document.querySelector("#use-ajax"); 


 
    
    async function cargarIndex() {
        container.innerHTML = "<h1>Loading...</h1>";
        try {
            let response = await fetch(baseURL+"indexplus.html");
            if (response.ok) {
                let dato = await response.text();
                container.innerHTML = dato;
                handlearbtnSeries();
                handlearbtnPeliculas();
            }
            else
                container.innerHTML = "<h1>Error - Failed URL!</h1>";
            }
        catch (response) {
            container.innerHTML = "<h1>Connection error22</h1>";
            };
    }



    function handlearbtnPeliculas(){
        let btnPeliculas=document.querySelector("#btnPeliculas");
        btnPeliculas.addEventListener("click",
                async function (){
                    container.innerHTML = "<h1>Loading...</h1>";
                    try {
                        let response = await fetch(baseURL+"peliculas.html");
                        if (response.ok) {
                            let dato = await response.text();
                            
                            container.innerHTML = dato;
                            asincTabla();
                            handlearbtnInicio();
                            handlearbtnSeries();
                        }
                        else
                            container.innerHTML = "<h1>Error - Failed URL!</h1>";
                        }
                    catch (response) {
                        container.innerHTML = "<h1>Connection error33</h1>";
                        };
                
                });

    }

    //----------------------   SERIES   ----------------------------------

    function handlearbtnSeries(){
        let btnSeries=document.querySelector("#btnSeries");
        btnSeries.addEventListener("click",
                async function (){
                    container.innerHTML = "<h1>Loading...</h1>";
                    try {
                        let response = await fetch(baseURL+"series.html");
                        if (response.ok) {
                            let dato = await response.text();
                            container.innerHTML = dato;
                            handlearbtnInicio();
                            handlearbtnPeliculas();
                        }
                        else
                            container.innerHTML = "<h1>Error - Failed URL!</h1>";
                        }
                    catch (response) {
                        container.innerHTML = "<h1>Connection error</h1>";
                        };
                
                });
    

    }

//--------------------------    TABLA PELICULAS    --------------------------

    function asincTabla(){
        let baseURL = "https://web-unicen.herokuapp.com/api/groups/grupo47/lgeneros";
        let container = document.querySelector("#ranking"); 
        mostrar();

        //------------------   POST  --------------------------------
        let btnIngresar = document.querySelector("#ingresar");
        let btnIngresarTres = document.querySelector("#ingresar3");
        btnIngresarTres.addEventListener("click", 
                    function(){
                        for(let i=0; i < "3"; i++){
                            cargar();
                            }
                            limpiarInput();
                        });
        btnIngresar.addEventListener("click",
                    function(){ 
                        cargar();
                        limpiarInput();
                    });
        

        async function cargar() {
            let genero = {
                "thing":[ {
                    "genero": document.getElementById("idGenero").value,
                    "cantPrimero": document.getElementById("idPrimero").value,
                    "cantSegundo": document.getElementById("idSegundo").value,
                    "cantTercero": document.getElementById("idTercero").value,
                    "cantCuarto": document.getElementById("idCuarto").value,
                }]
            }
            console.log(genero);
            try {
                container.innerHTML = "<h1>Guardando...;)</h1>";
                let request = await fetch(baseURL, {
                    "method" : "POST",
                    "headers": {
                        "Content-Type": "application/json",
                    },
                    "body": JSON.stringify(genero)
                });
                let response = await request;
                if (response.ok) {
                    let dato = await response.json();
                    console.log(dato);
                    mostrar();
                }
                else{
                    container.innerHTML = "<h1>Error - Failed URL :-!</h1>";
                }
                }
            catch (exc) {
                container.innerHTML = "<h1>Connection error E-) </h1>";
            }

        };

        function limpiarInput(){
            document.getElementById("idGenero").value = null;
            document.getElementById("idPrimero").value = null;
            document.getElementById("idSegundo").value = null;
            document.getElementById("idTercero").value = null;
            document.getElementById("idCuarto").value = null;
        }

        // -------------   GET  ------------------

        let todosGeneros = [];
        

        async function mostrar(){
            try {
                let request = fetch(baseURL);
                let response = await request;
                if (response.ok){
                    let docs = await response.json();
                    todosGeneros = docs.lgeneros; // corresponde a la carpeta generos de la api
                    container.innerHTML = "";
                    for (let elemento of docs.lgeneros){
                        for (let dato of elemento.thing){
                            container.innerHTML += "<tr><td>"+ dato.genero +"</td>"+"<td>"+ dato.cantPrimero +"</td>"+
                                    "<td>"+ dato.cantSegundo +"</td>"+
                                    "<td>"+ dato.cantTercero +"</td>"+
                                    "<td>"+ dato.cantCuarto + "</td>"+
                                    "<td><button id='"+elemento._id+"' class='btnDelete'>Borrar</button></td>" + 
                                    "<td><button id='"+"put"+elemento._id+"' class='btnPut'>Modificar</button></td></tr>";//cambie el id :)
                            } 
                
                    }
                    handlearBotonEliminar();
                    handlearBotonModificar();
                }
                else {
                    container.innerHTML = "<h1>Falla de URL</h1>";
                }
            
            }
            catch (exc) {
                container.innerHTML = "<h1>Fallo conexion</h1>";
            }
        }

        let filtro = document.querySelector("#filtrar");
        let sacarFiltro = document.querySelector("#idDeshacer");
        let filtrado = false;
        filtro.addEventListener("click", mostrarFiltro);
        sacarFiltro.addEventListener("click", 
                            function(){
                            if (filtrado){
                                mostrar();
                                filtrado = false;
                            }
                            });


        async function mostrarFiltro(){
            try {
                let request = fetch(baseURL);
                let response = await request;
                let filtro = parseInt(document.getElementById("idFiltro").value);
                if (response.ok){
                    let docs = await response.json();
                    container.innerHTML = "";
                    for (let elemento of docs.lgeneros){
                        for (let dato of elemento.thing){
                            if (parseInt(dato.cantCuarto) > filtro){
                                    container.innerHTML += "<tr><td>"+ dato.genero +"</td>"+"<td>"+ dato.cantPrimero +"</td>"+
                                    "<td>"+ dato.cantSegundo +"</td>"+
                                    "<td>"+ dato.cantTercero +"</td>"+
                                    "<td>"+ dato.cantCuarto + "</td>"+
                                    "<td><button id='"+elemento._id+"' class='btnDelete'>Borrar</button></td>" + 
                                    "<td><button id='"+"put"+elemento._id+"' class='btnPut'>Modificar</button></td></tr>";//tambien cambie ID
                                }
                            } 
                
                    }
                    handlearBotonEliminar();
                    handlearBotonModificar();
                }
                else {
                    container.innerHTML = "<h1>Falla de URL</h1>";
                }
        
            }
            catch (exc) {
                container.innerHTML = "<h1>Fallo conexion</h1>";
            }
            filtrado = true;
        }

        
    //-------------------   Handelearssss    --------------------------

        function handlearBotonEliminar () {
            let btnDelete = document.querySelectorAll(".btnDelete");
            for (let element of btnDelete) {
                element.addEventListener("click", function () {
                    deleteElement(element.id);
                })

            }
        }

        function handlearBotonModificar () {
            let btnPut = document.querySelectorAll(".btnPut");
            for (let element of btnPut) {
                element.addEventListener("click", function () {
                    cargarInput("put"+element.id);
                })
                limpiarInput();
            }
        }
    //----------------  PUT --------------------------------
        function cargarInput (id) {
            const resultado = todosGeneros.find( elemento => elemento._id === id );
            document.querySelector("#idGenero").value = resultado.thing[0].genero;
            document.querySelector("#idPrimero").value = resultado.thing[0].cantPrimero;
            document.querySelector("#idSegundo").value = resultado.thing[0].cantSegundo;
            document.querySelector("#idTercero").value = resultado.thing[0].cantTercero;
            document.querySelector("#idCuarto").value = resultado.thing[0].cantCuarto;

            let post = document.querySelector("#ingresar");
            if (!(post.classList.contains("oculto"))) {
                post.classList.toggle("oculto");
            }
            let post3 = document.querySelector("#ingresar3");
            if (!(post3.classList.contains("oculto"))) {
                post3.classList.toggle("oculto");
            }
            let guardar = document.querySelector("#btnGuardar");
            if (guardar.classList.contains("oculto")) {   
                guardar.classList.toggle("oculto");
            }
            guardar.id = resultado._id;
            guardar.addEventListener("click", async function () {
                let data = {
                    "thing": [{
                        "genero": document.querySelector("#idGenero").value,
                        "cantPrimero": document.querySelector("#idPrimero").value,
                        "cantSegundo": document.querySelector("#idSegundo").value,
                        "cantTercero": document.querySelector("#idTercero").value,
                        "cantCuarto": document.querySelector("#idCuarto").value,
                    }]
                }         
                container.innerHTML = "<h1>Cargando...</h1>";
                try {
                    let request = fetch(baseURL + "/" + guardar.id, {
                        "method": "PUT",
                        "headers": { "Content-Type": "application/json"},
                        "body": JSON.stringify(data)
                    });
                    let response = await request;
                    if (response.ok) {
                        let json = await response.json();
                        post.classList.toggle("oculto");
                        post3.classList.toggle("oculto");
                        guardar.classList.toggle("oculto");
                        mostrar();
                    }
                    else {
                        container.innerHTML = "<h1>Falla de URL</h1>";
                    }
                }
                catch (exc) {
                    container.innerHTML = "<h1>Falla de conexión</h1>";
                }
            })
        }


    //-----------------------  DELETE   ---------------------------



        async function deleteElement (id) {
            try {
                let request = fetch(baseURL+"/"+id,{
                    "method": "DELETE",
                    "headers": { "Content-Type": "application/json"}
                });
                let response = await request;
                if (response.ok) {
                    let json = await response.json();
                    mostrar();
                }
                else {
                    container.innerHTML = "<h1>Falla de URL</h1>";
                }
            }
            catch (exc) {
                container.innerHTML = "<h1>Falla de conexión</h1>";
            }
        }
}
//------------------termino PELICULAS


//--------------------    HAND INICIO   ----------------------------

    function handlearbtnInicio(){
        let btnInicio= document.querySelector("#btnInicio");
        btnInicio.addEventListener("click", cargarIndex);
    }

    cargarIndex();
});


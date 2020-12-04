'use strict'; //obliga a aplicar el estandar ecma 6

const URL = "http://127.0.0.1/red2/app/registrarUsuario.php"; //esto es un recurso necesario para hacer el fetch que me ayuda con Asincronico 


let frmRegistro = document.querySelector("#frmRegistro") //capture el formulario el java script


frmRegistro.addEventListener('submit',function(e)
    {
       e.preventDefault();//evita reenvio de formularios vacios o inconsistentes 

        let datos = new FormData(this);//almacena en la variable datos del contenido del formulario  

        fetch(URL,{
            method:'POST',   
            body: datos
        })

        .then(respuesta=>respuesta.json())
        .then(mensaje =>{

            document.querySelector("#letrero").innerHTML = mensaje;
         

        })
        .catch(error=>console.log('ocurrio un error',error));


    });

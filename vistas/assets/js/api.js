/* const url = 'http://127.0.0.1/RED2/app/listarpublicacion.php'; */
const url = 'https://jsonplaceholder.typicode.com/posts';




// alert("UwU");



/* let btnEnviar = document.getElementById(" btnEnviar");
 forma tradicional de capturar el elemento de dom en java script */


let btnEnviar = document.querySelector("#btnEnviar");

btnEnviar.addEventListener(

'click',function()
{
fetch (url)

.then(res=>res.json()) 
.then(datos=>console.log (datos)) 
.catch(Error=>console.log(error));

});




let capa = document.querySelector("#capa");

capa.addEventListener(
    
    'mouseover',function()
        {
           capa.innerHTML="owo iwi uwu ewe nwn"
        });





    

   

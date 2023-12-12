document.addEventListener('DOMContentLoaded', function(){
    clickOnbuttons();
});

function clickOnbuttons() { 
//     var fs = require('fs');
// var msg = "Hola, mundo!";
// fs.writeFile('app.js', 'var msg = "' + msg + '";', function (err) {
//   if (err) throw err;
//   console.log('Archivo guardado!');
    // document.getElementById('guardar').addEventListener('click', e=>{
    //     e.preventDefault();

    //     console.log('click en guardar');
    // })

    $('#guardar').click(function(elm){
        elm.preventDefault();

        var formulario = document.getElementById('miFormulario');
        var formData = new FormData(formulario);

        // console.log(typeof(formulario));
        formData.forEach(function(valor, clave){
            console.log(clave + ": " + valor);
        });
        
        fetch('./procesar_prestamos.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => {
            if (response.ok) {
                return response.text(); // Convierte la respuesta a texto
            } else {
                // throw new Error('Error al cargar la información.');
                throw new Error(JSON.stringify({ status: response.status, message: response.statusText }));
                // return response.json();
            }
        })


        // console.log('click en guardar');


    });
}

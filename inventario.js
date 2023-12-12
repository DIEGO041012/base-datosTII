document.addEventListener('DOMContentLoaded', function(){
    clickOnbuttons();
});

function clickOnbuttons() { 


    $('#guardar').click(function(elm){
        elm.preventDefault();

        var formulario = document.getElementById('miinventario');
        var formData = new FormData(formulario);

        formData.forEach(function(valor, clave){
            console.log(clave + ": " + valor);
        });
        
        fetch('./procesar_inventario.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => {
            if (response.ok) {
                return response.text(); 
            } else {
                throw new Error(JSON.stringify({ status: response.status, message: response.statusText }));
               
            }
        })
    });
}

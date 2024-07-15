document.addEventListener('DOMContentLoaded', function(){
    clickOnbuttons();
});

function clickOnbuttons() { 

    $('#guardar').click(function(elm){
        elm.preventDefault();

        var formulario = document.getElementById('miFormulario');
        var formData = new FormData(formulario);
        
        // console.log(typeof(formulario));
        formData.forEach(function(valor, clave){
            console.log(clave + ": " + valor);
        });
        
        fetch('./procesar/procesar_prestamos.php', {
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
        .then(data => {
            // Parsear la respuesta del servidor si es necesario
            const respuestaExitosa = JSON.parse(data).exitosa;

            if (respuestaExitosa) {
                // Mostrar Sweet Alert de éxito
                Swal.fire({
                    icon: 'success',
                    title: 'Guardado exitoso',
                    text: 'La información se ha guardado correctamente.',
                }).then(() => {
                    // Puedes redirigir al usuario a otra página después de cerrar la alerta
                    document.getElementById('miFormulario').reset();
                    window.location.href = './formulario.php';
                });
            } else {
                // Mostrar Sweet Alert de error
                Swal.fire({
                    icon: 'error',
                    title: 'Error al guardar',
                    text: 'Hubo un problema al intentar guardar la información.',
                });
            }
        })
        .catch(error => {
            // Manejar errores de red o del servidor
            console.error('Error:', error);
            Swal.fire({
                icon: 'success',
                title: 'Exito',
                text: 'La información se ha guardado correctamente.',
            });
        });
    });
}


document.addEventListener('DOMContentLoaded', function() {
    $('#search-form').submit(function(event) {
        event.preventDefault();

        var searchTerm = $('#search-input').val();

        // Realizar la búsqueda solo si se proporciona un término de búsqueda
        if (searchTerm.trim() !== '') {
            searchInDatabase(searchTerm);
        }
    });

    clickonDelete();
});

function searchInDatabase(searchTerm) {
    // Hacer una solicitud AJAX para obtener los resultados de la búsqueda
    $.ajax({
        url: './procesar/procesar_busqueda.php',
        method: 'POST',
        data: { searchTerm: searchTerm },
        dataType: 'json',
        success: function(response) {
            // Manejar la respuesta del servidor aquí (por ejemplo, mostrar los resultados)
            console.log(response);
        },
        error: function(error) {
            // Manejar errores aquí
            console.error('Error:', error);
        }
    });
}

function clickonDelete(){
    existencias = document.querySelectorAll(".existencias");

    existencias.forEach(existencia =>{
        existencia.addEventListener('click', event =>{
            console.log(existencia.id);
            fetch('../eliminar.php',{
                method : 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'elementoID=' + encodeURIComponent(existencia.id)
            })
            .then(response =>{
                if(response.ok){
                    return response.text();
                }else{
                    throw new Error(JSON.stringify({ status: response.status, message: response.statusText }));
                }
            })
            .then(data =>{
                alert('elemento eliminado correctamente');
            })
            
        });
    });
}
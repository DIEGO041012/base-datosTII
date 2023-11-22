document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const buttons = document.querySelectorAll('button');

    buttons.forEach(button => button.disabled = true);

    function validateForm() {
        // Agrega tus lógicas de validación aquí
        // Por ejemplo, puedes verificar que los campos requeridos estén llenos

        // Deshabilitar o habilitar los botones según la validación
        const isValid = true; // Cambia esto con tu lógica de validación
        buttons.forEach(button => button.disabled = !isValid);

        // Devuelve el resultado de la validación
        return isValid;
    }

    form.addEventListener('submit', function (event) {
        // Evitar que el formulario se envíe si la validación no pasa
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    form.addEventListener('input', function () {
        // Volver a validar cuando haya cambios en el formulario
        validateForm();
    });
});
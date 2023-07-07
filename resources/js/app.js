//Vecchio import del "bootstrap" di Laravel
//Non si tratta del framework CSS ma del "bootstrap" cioè delle istruzioni iniziali
//In pratica importa le librerie lodash e axios
import './bootstrap';

//Importo il nostro sass
import '~resources/scss/app.scss'

//Importo il JS di Bootstrap
import * as bootstrap from 'bootstrap'

//Informo Vite di processare le immagini presenti in /resources/img
//Documentazione: https://laravel.com/docs/9.x/vite#blade-processing-static-assets
// import.meta.glob(['../img/**'])


const deleteButton = document.getElementById('deleteButton');

deleteButton.addEventListener('click', function (e) {
    e.preventDefault();

    const confirmed = confirm('Are you sure you want to delete this Comic?');

    if (confirmed) {
        // Perform the deletion
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.submit();
    }
});




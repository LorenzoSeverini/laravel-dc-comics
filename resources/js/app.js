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
const comicId = deleteButton.getAttribute('data-comic-id');

deleteButton.addEventListener('click', function (e) {
    e.preventDefault();

    const confirmed = confirm('Are you sure you want to delete this Comic?');

    if (confirmed) {
        fetch(`/comic/${comicId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')  // Laravel's CSRF protection
            }
        })
        .then(response => {
            if (response.ok) {
                // Comic deleted successfully
                window.location.href = '/comic';
            } else {
                // Error occurred while deleting comic
                console.error('Error deleting comic:', response.status);
            }
        })
    }
});


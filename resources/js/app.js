import './bootstrap';
import * as bootstrap from 'bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss'


// precompilazioni immagini
import.meta.glob([
    '../img/**'
])
src="//cdn.jsdelivr.net/npm/sweetalert2@11"
src="sweetalert2.all.min.js"
src="sweetalert2.min.js"
rel="stylesheet" 
href="sweetalert2.min.css"

// ES6 Modules or TypeScript
import Swal from 'sweetalert2'

// CommonJS
const Swal = require('sweetalert2')

import Swal from '/librerie/sweetalert2.js'

import '/librerie/sweetalert2.scss'

Swal.fire({
    title: 'Error!',
    text: 'Do you want to continue',
    icon: 'error',
    confirmButtonText: 'Cool'
  })
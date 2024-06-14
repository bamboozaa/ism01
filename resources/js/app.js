import './bootstrap';

import jQuery from 'jquery';
window.$ = jQuery;

import Swal from 'sweetalert2';
window.Swal = Swal;

// import DataTable from 'datatables.net-dt';
import DataTable from 'datatables.net-bs5';
// import 'datatables.net-autofill-bs5';
let table = new DataTable('#example', {
    // config options...
    pageLength: 12
});

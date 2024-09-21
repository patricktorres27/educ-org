import $ from 'jquery';

import * as Bootstrap from 'bootstrap'
window.jQuery = window.$ = $
window.bootstrap = Bootstrap;

import DataTable from 'datatables.net-bs5';
window.DataTable = DataTable;


import 'datatables.net-buttons-bs5';
window.DataTable.Buttons = DataTable;

import 'datatables.net-select-bs5';
window.DataTable.Select = DataTable;

import 'laravel-datatables-vite/js/dataTables.buttons.js';
import 'laravel-datatables-vite/js/dataTables.renderers.js';

import 'datatables.net-dt';
import Editor from '@datatables.net/editor-2024-10-04-dt';
window.DataTable.Editor = Editor;



$.extend(true, DataTable.defaults, {
    dom:
        "<'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'<'float-end'B><'float-end mt-1 me-3'f>>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
});

$.extend(true, DataTable.Buttons.defaults, {

})


$.extend(window.DataTable.ext.classes, {
    sTable: "dataTable table table-striped table-bordered table-hover test",
});


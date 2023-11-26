console.log("quotation.js is loading");


$(document).ready(function () {

    $('#tblQuotationList').DataTable({
        "scrollX": false,
        "order": [],
        "columns": [
            { "data": "id" },
            { "data": "date" },
            { "data": "actions" },
            { "data": "status" }
       
        ],
        columnDefs: [
            {
                width: 150,
                targets: 0
            },
        ],
    });


});
console.log("uploadPrescription.js is loading");

var formData = new FormData();
$(document).ready(function () {

    $('#tblPrescriptionList').DataTable({
        "scrollX": false,
        "order": [],
        "columns": [
            { "data": "id" },
            { "data": "address" },
            { "data": "date" },
            { "data": "actions" }
       
        ],
        columnDefs: [
            {
                width: 150,
                targets: 0
            },
        ],
    });


    $("#btnSubmit").on("click", function (e) {
        e.preventDefault();

        if($('#btnSubmit').text().trim()=='Submit'){
            upload_prescription();
        }
    });


    allPrescription();

});


function upload_prescription() {
 
    formData.append("note", $("#txtNote").val());
    formData.append("address", $("#txtAddress").val());

    // Get current date using Moment.js
    const currentDate = moment(); 
    // Adjust the format as needed
    const formattedDate = currentDate.format('YYYY-MM-DD'); 
    // Append the formattedDate to formData
    formData.append("date", formattedDate);

    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "/user/upload_prescription",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        timeout: 800000,
        beforeSend: function () {},
        success: function (response) {
            console.log(response);

            if (response.status == "saved") {
                alert("Success");
                allPrescription();
            }else{
                alert("Failed");
            }
        },
        error: function (error) {
            alert("An error occurred. Please try again later.");
        },
        complete: function () {},
    });
}


function allPrescription(){

    $.ajax({
        type: "GET",
        url: '/user/allPrescription',
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        beforeSend: function () {
        },
        success: function (response) {
            console.log(response);

            if (response.data) {

                var dt = response.data;
                console.log(dt);
                var data = [];
                    for (i = 0; i < dt.length; i++) {

                        var id = dt[i]['id'];
                        var name = dt[i]['address'];
                        var date = dt[i]['created_date'];
                        var stringId = "'"+id+"'";

                        data.push({
                            "id": id,
                            "address": name,
                            "date": date,
                            "actions": '<button class="btn btn-primary btn-sm" onclick="view(' + stringId + ')">view</button>'
                        });

                    }
                var table = $('#tblPrescriptionList').DataTable();
                table.clear();
                table.rows.add(data).draw(); 

            } else {
                // showErrorMessage();
            }

        },
        error: function (error) {
            console.log(error);
            // showErrorMessage();
        },
        complete: function () {

        }

    });
}


function view(id){

    $.ajax({
        type: "GET",
        url: '/user/prescription/get_data/' + id,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        beforeSend: function () {
        },
        success: function (response) {
            console.log(response);
            if (response.status = "success") {

                var dt = response.data;

                $('#txtNote').val(dt.note);
                $('#txtAddress').val(dt.address);

            } else {
                alert("error");
                // showErrorMessage();
            }

        },
        error: function (error) {
            console.log(error);
            // showErrorMessage();
        },
        complete: function () {

        }

    });
}
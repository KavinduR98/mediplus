console.log("adminAuth.js loading");

var formData = new FormData();
$(document).ready(function () {

    $("#btnAction").on("click", function (e) {
        e.preventDefault();

        if($('#btnAction').text().trim()=='Login'){
            admin_login();
        }
    });

});


function admin_login() {
    formData.append("email", $("#txtEmail").val());
    formData.append("password", $("#txtPassword").val());

    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "/admin/login",
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

            if (response.status == 200) {
                location.href = response.redirect;
            }else{
                alert("Your credentials are invalid!");
            }
        },
        error: function (error) {
            alert("An error occurred. Please try again later.");
        },
        complete: function () {},
    });
}
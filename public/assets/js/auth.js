console.log("auth js loading");

var formData = new FormData();
$(document).ready(function () {

    $("#btnAction").on("click", function (e) {
        e.preventDefault();

        if($('#btnAction').text().trim()=='Register'){
            create_user();
        }else{
            login_user();
        }
    });

});


function create_user() {
 
    formData.append("name", $("#txtName").val());
    formData.append("email", $("#txtEmail").val());
    formData.append("address", $("#txtAddress").val());
    formData.append("phone", $("#txtPhone").val());
    formData.append("dob", $("#txtDob").val());
    formData.append("password", $("#txtPassword").val());

    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "/user/register",
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
                alert("Registration failed! Please try again later.");
            }
        },
        error: function (error) {
            alert("An error occurred. Please try again later.");
        },
        complete: function () {},
    });
}



function login_user() {
    formData.append("email", $("#txtEmail").val());
    formData.append("password", $("#txtPassword").val());

    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "/user/login",
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

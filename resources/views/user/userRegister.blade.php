
@include('header')

<head>
    <title>Mediplus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/login_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/auth.js" ?random=<?php echo uniqid(); ?>></script>
</head>

<body class="bg-image" style="background-image: url('images/back1.jpg');">

    <div class="row m-0 p-3 h-auto w-100">
        <div class="col-12 col-md-4 col-lg-4 blur rounded d-flex justify-content-center align-items-center  p-md-5 p-2 ps-4 pe-4 col-50">

            <form method="post" action="#" name="login" class="vw-100 p-md-3 p-2 ">
                <div style="text-align: center;">
                    <h4><strong>User - Register</strong></h4>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control form-control-md" id="txtName" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control form-control-md" id="txtEmail" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control form-control-md" id="txtAddress" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                    <label for="contact">Contact No:</label>
                    <input type="text" class="form-control form-control-md" id="txtPhone" placeholder="Enter Contact No">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control form-control-md" id="txtDob">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control form-control-md" id="txtPassword" placeholder="Enter Password">
                </div>

                <button type="submit" id="btnAction" class="btn btn-primary w-100 mt-3" style="background-color: #2874a6; font-size:18px">Register</button>

                <div class="row mt-4">
                    <div class="col-lg-8 col-md-8 ml-1">
                        <p style="margin-bottom: 0;">Already have an account? <a href="/" style="text-decoration: none;">Login</a></p>
                    </div>
                    <div class="col-lg-4 col-md-4 p-0 m-0"></div>
                </div>
            </form>
        </div>
    </div>
</body>
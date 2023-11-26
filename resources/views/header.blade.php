<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/header_styles.css">
		<link rel="stylesheet" href="assets/css/icofont.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- Header Area -->
		<header class="header" >
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
                                    <img src="images/logo.png" class="img-w">
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu" style="float: right">
											@auth
												@if(auth()->user()->user_type === 'Admin')
													<li>
														<a href="#">
															Quotations <i class="icofont-rounded-down"></i>
														</a>
														<ul class="dropdown">
															<li><a href="/view_admin_request_quotations" style="font-size: 13px">Request Quotations</a></li>
														</ul>
													</li>
												@elseif(auth()->user()->user_type != 'Admin') 
													<li><a href="/view_upload_prescription">Prescriptions</a></li>
													
													<li><a href="/view_quotations">Quotations </a></li>
												@endif
											@endauth
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									@guest
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="float: right">
                                          Login
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="/">User</a>
                                          <a class="dropdown-item" href="/view_admin_register">Admin</a>
                                        </div>
                                    </div>
									@endguest

									@auth
										@if(auth()->user()->user_type === 'Admin')
											<a href="/admin/logout"><button type="button" class="btn btn-primary btn-sm mt-1">Logout</button></a>
										@elseif(auth()->user()->user_type != 'Admin') 
											<a href="/user/logout"><button type="button" class="btn btn-primary btn-sm mt-1">Logout</button></a>
										@endif
									@endauth
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
    </body>

</html>

<script>
    $(document).ready(function(){
        $('#icon').click(function(){
            $('ul').toggleClass('show');
        });
    });
</script>

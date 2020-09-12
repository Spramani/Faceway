<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 19:40:31 GMT -->
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- Main Font -->
	<script src="js/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/toastr.min.css">
	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/fonts.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/coustomstyle.css">



</head>

<body class="landing-page">

<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="{{ url('/') }}/img/logo.png" alt="Olympus">
					<img src="img/logo-colored-small.png" alt="Olympus" class="logo-colored">
				</div>
				<div class="title-block">
					<h6 class="logo-title">Faceway</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>

			
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard" style="height:1px;"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Welcome to the Best Social Network in the World</h1>
				{{-- <p>We are the best and biggest social network with 10 billion active users all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
					
				</p> --}}
				{{-- <a href="#" class="btn btn-md btn-border c-white">Register Now!
				</a> --}}
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon" data-toggle="tooltip" data-placement="left" data-original-title="Clik to Login"><use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"  data-toggle="tooltip" data-placement="left" data-original-title="Clik to Registration"><use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						


						<div class="title h6">Login to your Account</div>
						<a href="#" class="login_logo">
							<div class="img-wrap">
								{{--  <img src="{{ url('/') }}/img/logo.png" alt="Olympus">  --}}
								<img src="{{ url('/') }}/img/icon-fly.png" alt="Olympus" class="logo-colored">
							</div>
							<div class="title-block text-center">
								<h6 class="logo-title">Faceway</h6>
								<div class="sub-title">SOCIAL NETWORK</div>
							</div>
						</a>
						<form class="content needs-validation" action="{{ Route('login') }}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" name="lname" type="text">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" name="lpass" type="password">
									</div>
			
									<div class="remember">
			
										
										<a href="{{route('forgotpass_view')}}" class="forgot">Forgot my Password</a>
									</div>
			
									<input href="#" type="button" onclick="submitlogin();" class="btn btn-lg btn-primary full-width" value="Login">
			
									{{--  <div class="or"></div>
			
									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>
			
									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>
			
			
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>  --}}
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Faceway</div>
                        <form class="content needs-validation" action="" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row">
								{{-- <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div> --}}
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Full Name</label>
                                        <input class="form-control" name="u_fullname" placeholder="" type="text">
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">User Name</label>
                                        <input class="form-control" name="u_username" placeholder="" type="text">
                                    </div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" name="u_email" placeholder="" type="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" name="u_password" placeholder="" type="password">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Confirm Your Password</label>
										<input class="form-control" name="u_c_password" placeholder="" type="password">
									</div>
			
									{{-- <div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="datetimepicker" value="10/24/1984" />
										<span class="input-group-addon">
                                            <svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                                        </span>
									</div> --}}
			
									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" name="u_gender">
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="0">Not Specified</option>
										</select>
									</div>
			
									<div class="remember">
										<div class="checkbox">
											<label for="acceptcbk" id="acceptcbklabel">
												<input id="acceptcbk" name="u_acceptbtn" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
											
										</div>
									</div>
			
									<label class="full-width" onclick="submitreg();" > <span   class="btn btn-purple btn-lg full-width" >Complete Registration!</a></label>
										{{--  for="r_submitbtn"  --}}
                                    <input id="r_submitbtn" type="submit" value="" name="u_r_submit" style="height:0px;width:0px;opacity:0;padding: 0;margin: 0;">
                                     <script>
                                        
                                    </script> 
                                </div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>


<!-- JS Scripts -->
<script src="{{ url('/') }}/js/jquery-3.2.1.js"></script>
<script src="{{ url('/') }}/js/jquery.appear.js"></script>
<script src="{{ url('/') }}/js/jquery.mousewheel.js"></script>
<script src="{{ url('/') }}/js/perfect-scrollbar.js"></script>
<script src="{{ url('/') }}/js/jquery.matchHeight.js"></script>
<script src="{{ url('/') }}/js/svgxuse.js"></script>
<script src="{{ url('/') }}/js/imagesloaded.pkgd.js"></script>
<script src="{{ url('/') }}/js/Headroom.js"></script>
<script src="{{ url('/') }}/js/velocity.js"></script>
<script src="{{ url('/') }}/js/ScrollMagic.js"></script>
<script src="{{ url('/') }}/js/jquery.waypoints.js"></script>
<script src="{{ url('/') }}/js/jquery.countTo.js"></script>
<script src="{{ url('/') }}/js/popper.min.js"></script>
<script src="{{ url('/') }}/js/material.min.js"></script>
<script src="{{ url('/') }}/js/bootstrap-select.js"></script>
<script src="{{ url('/') }}/js/smooth-scroll.js"></script>
<script src="{{ url('/') }}/js/selectize.js"></script>
<script src="{{ url('/') }}/js/swiper.jquery.js"></script>
<script src="{{ url('/') }}/js/moment.js"></script>
<script src="{{ url('/') }}/js/daterangepicker.js"></script>
<script src="{{ url('/') }}/js/simplecalendar.js"></script>
<script src="{{ url('/') }}/js/fullcalendar.js"></script>
<script src="{{ url('/') }}/js/isotope.pkgd.js"></script>
<script src="{{ url('/') }}/js/ajax-pagination.js"></script>
<script src="{{ url('/') }}/js/Chart.js"></script>
<script src="{{ url('/') }}/js/chartjs-plugin-deferred.js"></script>
<script src="{{ url('/') }}/js/circle-progress.js"></script>
<script src="{{ url('/') }}/js/loader.js"></script>
<script src="{{ url('/') }}/js/run-chart.js"></script>
<script src="{{ url('/') }}/js/jquery.magnific-popup.js"></script>
<script src="{{ url('/') }}/js/jquery.gifplayer.js"></script>
<script src="{{ url('/') }}/js/mediaelement-and-player.js"></script>
<script src="{{ url('/') }}/js/mediaelement-playlist-plugin.min.js"></script>
<script src="{{ url('/') }}/js/sticky-sidebar.js"></script>

<script src="{{ url('/') }}/js/base-init.js"></script>
<script defer src="{{ url('/') }}/fonts/fontawesome-all.js"></script>

<script src="{{ url('/') }}/Bootstrap/dist/js/bootstrap.bundle.js"></script>

<script src="{{ url('/') }}/js/toastr.min.js"></script>
<script src="{{ url('/') }}/js/customscript.js"></script>

</body>

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 19:40:33 GMT -->
</html>
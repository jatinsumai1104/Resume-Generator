<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Resume Generator
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/demo/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/plugins/text-heading/Animated-Type-Heading.css" />
	<link rel="stylesheet" href="assets/css/style1.css" />
	<style>
		html,body{
    		height: 100%;
		}
		.btn{
			font-size: 14px;
		}
		.col-4{
			flex: none;
			max-width: none;
		}
		.card{
			border-radius: 20px;
			border-bottom-left-radius: 
		}
		.modal-dialog{
			max-width: 450px!important;
		}
		.fa{
			background-color: #111;
			color: #fff;
		}
		.fa:hover{
			background-color: #fff;
			color: #9124A3;
		}
	</style>
</head>

<body class="" style="background-color: #fff;">
	<div class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<div class="caption v-middl text-center">
						<h1 class="cd-headline clip">
							<span class="blc"></span>
							<span class="cd-words-wrapper" style="color:#111;">
								<b class="is-visible">Resume.</b>
							</span>
						</h1>
					</div>
				</div>
			</div>

			<div class="row justify-content-center" style="border-radius: 50px;">
				<div class="col-md-8">
					<div class="card-group">
						<div class="card p-4">
							<form action="index.php/LOGIN/verify" method="post">
								<div class="card-body">
									<h1>LOGIN</h1>
									<p class="text-muted">Sign In to your account</p>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="material-icons">face</i>
											</span>
										</div>
										<input class="form-control" type="text" placeholder="Username" name="username">
									</div>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="material-icons">lock</i>
											</span>
										</div>
										<input class="form-control" type="password" placeholder="Password" name="password">
									</div>
									<div class="custom-control custom-checkbox" style="margin-top:10px;">
										<input type="checkbox" name="stay_signed_in" value="true" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1" name="stay_signed_in">Stay Signed In</label>
									</div>
									<div class="row">
										<div class="col-4">
											<button class="btn  px-4 btn-round" type="submit" name="login" style="background-color: #000;">Login</button>
										</div>
										<div class="col-4 text-left">
											<button class="btn btn-danger px-4 btn-round" name="skip_sign_in">Skip Sign In...</button>
										</div>

									</div>

								</div>
							</form>
						</div>
						<div class="card text-white  py-5 d-md-down-none" style="width:44%; background: url('assets/img/cover.jpg') no-repeat;background-size: cover;">
							<button class="btn px-4 btn-round" name="registration" data-toggle="modal" data-target="#mysignupmodal" style="position:absolute;bottom: 10%;right: 25px;background-color: #fff;border: solid 2px #111;color: #47A44B;font-weight: 500;">Sign-Up Now!! (or you will me some cool stuff)</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--	SIGN_UP MODAL-->
	<div class="modal fade" id="mysignupmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-signup" role="document">
			<div class="modal-content">
				<div class="card card-signup card-plain">
					<div class="modal-header">
						<h5 class="modal-title card-title">Register</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="material-icons">clear</i>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 mr-auto">
								<div class="social text-center">
									<a href="https://twitter.com/signup" class="btn btn-just-icon btn-round btn-twitter">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="https://accounts.google.com/signin/oauth/oauthchooseaccount?client_id=178585172569-h0b7k6fb40vmidn7odcgmrnlln8apkcq.apps.googleusercontent.com&as=dORMUUs6rbgPX6dZIQ12WQ&destination=https%3A%2F%2Fwordtohtml.net&approval_state=!ChR0S2tkSWNBN25sQTJLQkRNNDA5LRIfdzl0bnZvZVhMRkViOEhuU1JuY2dubW9lTVhjOFp4WQ%E2%88%99ANKMe1QAAAAAW8TYhp3NLym0MIPZ0Z6_r-F2FcwDfo6s&oauthgdpr=1&xsrfsig=AHgIfE-ruab-BLvEputFaxzTBE0_w2ziVg&flowName=GeneralOAuthFlow" class="btn btn-just-icon btn-round btn-google">
										<i class="fa fa-google"></i>
									</a>
									<a href="https://en-gb.facebook.com/" class="btn btn-just-icon btn-round btn-facebook">
										<i class="fa fa-facebook"> </i>
									</a>
									<h4> or be classical </h4>
								</div>

								<form class="form" method="POST" action="index.php/LOGIN/registerUser">
									<div class="card-body">
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="material-icons">email</i></div>
												</div>
												<input type="text" class="form-control" placeholder="Email..." name="signup_username">
											</div>
										</div>

										<div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
												</div>
												<input type="password" placeholder="Password..." class="form-control" name="signup_password" />
											</div>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="" checked>
												<span class="form-check-sign">
													<span class="check"></span>
												</span>
												I agree to the <a href="#something">terms and conditions</a>.
											</label>
										</div>
									</div>
									<div class="modal-footer justify-content-center">
										<button class="btn btn-primary btn-round" name="sign_up">Sign Up</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!--  Google Maps Plugin    -->
	<script src="assets/js/plugins/moment.min.js" type="text/javascript"></script>
	<script src="assets/js/plugins/date-picker.min.js" type="text/javascript"></script>

	<!--    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
	<!-- Chartist JS -->
	<script src="assets/js/plugins/chartist.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/demo/demo.js"></script>
	<script src="assets/js/custom.js"></script>
	<!--	<script src="assets/plugins/text-heading/Animated-Type-Heading.js"></script>-->
	<script>
		$(document).ready(function() {
			// Javascript method's body can be found in assets/js/demos.js
			md.initDashboardPageCharts();

		});

	</script>
</body>

</html>

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
		}
	</style>
</head>

<body class="" style="background-color: #000;">
	<div class="content">
		<div class="container-fluid">
			<!--
			<div class="row">
				<div class="col-md-12">
					<div class="caption v-middle text-center">
						<h1 class="cd-headline clip">
							<span class="blc"></span>
							<span class="cd-words-wrapper" style="height:150px;color:white;">
								<b class="is-visible">Activo.</b>
								<b>Asset Management.</b>
							</span>
						</h1>
					</div>
				</div>
			</div>
-->
			<div class="row justify-content-center" style="padding-top: 100px; border-radius: 50px;">
				<div class="col-md-8">
					<div class="card-group">
						<div class="card p-4">
							<form action="index.php/Login/verify" method="post">
								<div class="card-body">
									<h1>Login</h1>
									<p class="text-muted">Sign In to your account</p>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="material-icons">face</i>
											</span>
										</div>
										<input class="form-control" type="text" placeholder="Username" name="user_email">
									</div>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="material-icons">lock</i>
											</span>
										</div>
										<input class="form-control" type="password" placeholder="Password" name="user_password">
									</div>
									<div class="custom-control custom-checkbox" style="margin-top:10px;">
										<input type="checkbox" name="stay_signed_in" value="true" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Stay Signed In</label>
									</div>
									<div class="row">
										<div class="col-4">
											<button class="btn  px-4" type="submit" name="login" style="background-color: #000;">Login</button>
										</div>
										<div class="col-4 text-left">
											<button class="btn btn-danger px-4" name="skip">Skip Sign In...</button>
										</div>
										<div class="col-4 text-left" disabled>
											<button class="btn btn-light px-4" name="forget" disabled>Forgot password?</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="card text-white  py-5 d-md-down-none" style="width:44%; background: url('assets/img/cover.jpg') no-repeat;background-size: cover;" >
							<img src="assets/img/logo/logo2.jpg" alt="Logo" width="100px" style="border-radius: 25px;position:relative;bottom:0;right:0;">
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
	<script src="assets/plugins/text-heading/Animated-Type-Heading.js"></script>
	<script>
		$(document).ready(function() {
			// Javascript method's body can be found in assets/js/demos.js
			md.initDashboardPageCharts();

		});

	</script>
</body>

</html>

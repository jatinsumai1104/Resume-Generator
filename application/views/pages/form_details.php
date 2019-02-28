<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Resume Generator
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="../../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../../assets/demo/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../assets/css/style1.css" />
	<style>
		.bmd-form-group:not(.has-success):not(.has-danger) [class^='bmd-label'].bmd-label-floating, .bmd-form-group:not(.has-success):not(.has-danger) [class*=' bmd-label'].bmd-label-floating , .bmd-form-group label{
			color: #111;
		}
	</style>
</head>

<body class="" style="background-color: #fff;">
	<div style="margin-top : 100px;">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="#pablo" style="color: #111">Some Detail for Your Resume</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
				</button>

			</div>
		</nav>
		<!-- End Navbar -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="card card-profile">
							<div class="card-avatar">
								<a href="#pablo">
									<img class="img" src="../../assets/img/faces/leonardo-da-vinci.jpg" />
								</a>
							</div>
							<div class="card-body">
								<h6 class="card-category text-gray">Resume Founder</h6>
								<h4 class="card-title">Leonardo Da Vinci</h4>
								<h6 class="card-title">Some Gyaan!!</h6>
								<p class="card-description">
									Leonardo di ser Piero da Vinci was an Italian Renaissance polymath. According to data available online, Leonardo da Vinci invented the first professional profile in 1482, which we call as the résumé. The word Resume originated from French résumé“to summarize”, and from Latin resumere “to take back”.
								</p>
								<a href="https://www.linkedin.com/pulse/20140602023614-28126547-who-invented-the-resume-the-da-vinci-code" class="btn btn-primary btn-round">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="card">
							<form action="../USER_DETAILS/updateDetails" method="POST">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Edit Profile</h4>
									<p class="card-category">Complete your profile</p>
									<ul class="nav nav-pills nav-pills-primary" role="tablist" style="margin: 0 auto;text-align: center;">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true" style="color: #ffffff;font-weight: 500;">
												Profile
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false" style="color: #ffffff;font-weight: 500;">
												School/College Details
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false" style="color: #ffffff;font-weight: 500;">
												Experiences and Other
											</a>
										</li>
									</ul>
								</div>
								<div>
									<div class="tab-content tab-space">
										<div class="tab-pane active" id="link1" aria-expanded="true">
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">First Name</label>
															<input type="text" class="form-control" name="user_first_name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">Last Name</label>
															<input type="text" class="form-control" name="user_last_name">
														</div>
													</div>
												</div>
												<div class="row">

													<div class="col-md-4">
														<div class="form-group">
															<label class="bmd-label-floating">User Contact</label>
															<input type="number" class="form-control" name="user_phone_number">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="bmd-label-floating">Email address</label>
															<input type="email" class="form-control" name="user_email">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="bmd-label-floating">Git link</label>
															<input type="text" class="form-control" name="user_git_link">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="bmd-label-floating">Address</label>
															<input type="text" class="form-control" name="user_address">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">Age</label>
															<input type="number" class="form-control" name="user_age">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false" style="color: #ffffff;font-weight: 500;">
																Next ==>
															</a>
														</div>
													</div>
												</div>

												<div class="clearfix"></div>


											</div>
										</div>
										<div class="tab-pane" id="link2" aria-expanded="false">
											<div class="card-body">
												<p>
													<a class="btn btn-primary" data-toggle="collapse" href="#schooldetails" aria-expanded="false" aria-controls="schooldetails">
														School Deatils
													</a>
													<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collegedetails" aria-expanded="false" aria-controls="collegedetails">
														College Details
													</button>
												</p>
												<div class="collapse" id="schooldetails">
													<div class="card card-body">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="bmd-label-floating">School Name</label>
																	<input type="text" class="form-control" name="user_school_name">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="bmd-label-floating">SSC Marks</label>
																	<input type="text" class="form-control" name="user_ssc_marks">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="bmd-label-floating">HSC College Name</label>
																	<input type="text" class="form-control" name="user_hsc_college_name">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="bmd-label-floating">HSC Marks</label>
																	<input type="text" class="form-control" name="user_hsc_marks">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="collapse" id="collegedetails">
													<div class="card card-body">

														<div class="row">
															<div class="col-md-12">
																<div class="form-group">
																	<label class="bmd-label-floating">Degree College Name</label>
																	<input type="text" class="form-control" name="user_current_college_name">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="bmd-label-floating">Branch</label>
																	<input type="text" class="form-control" name="user_current_college_branch">
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label class="bmd-label-floating">Current Aggregrate Pointer </label>
																	<input type="text" class="form-control" name="user_current_pointer">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="tab-pane" id="link3" aria-expanded="false">
											<div class="card-body">
											<?php
												$contents_of_page = array("Achivements (Enter In format [rank - title - period])", "Known and worked on Languages (Enter languages ', ' seperated)", "Projects (Enter Project ',' seperated)", "Any Experience?", "Co-Curricular Activity", "Extra-Curricular");
												$contents_page_name = array("user_achivements", "language", "user_projects", "user_experience", "user_co_curricular", "user_extra_curricular");
												for($i = 0; $i<count($contents_of_page); $i++){
											?>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<div class="form-group">
																	<label for="exampleFormControlTextarea1"><?php echo $contents_of_page[$i]; ?></label>
																	<textarea class="form-control" id="<?php echo $contents_page_name[$i];?>" rows="3" name="<?php echo $contents_page_name[$i];?>"></textarea>
																</div>
															</div>
														</div>
													</div>
												<?php  }?>
												<button type="submit" class="btn btn-primary pull-right" name="proceed"> Proceed </button>
												<div class="clearfix"></div>

											</div>
										</div>

									</div>
								</div>
							</form>


						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<div class="copyright float-right"  style="color: #111;">
				&copy;
				<script>
					document.write(new Date().getFullYear())

				</script>, made with <i class="material-icons">favorite</i>
			</div>
		</div>
	</footer>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!--  Google Maps Plugin    -->
	<script src="../../assets/js/plugins/moment.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/date-picker.min.js" type="text/javascript"></script>

	<!--    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
	<!-- Chartist JS -->
	<script src="../../assets/js/plugins/chartist.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="../../assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../../assets/demo/demo.js"></script>
	<script src="../../assets/js/custom.js"></script>
	<script src="../../assets/js/project.js"></script>
	<script src="../../assets/js/experience.js"></script>
	<script>
		$(document).ready(function() {
			// Javascript method's body can be found in ../../assets/js/demos.js
			md.initDashboardPageCharts();

		});

	</script>
</body>

</html>

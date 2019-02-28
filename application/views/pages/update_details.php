<?php
if($_SESSION['islogin']){
	extract($random0);
	extract($random1);
	extract($random2);
	extract($random3);
	extract($random4);
	extract($random5);
	extract($random6);
	extract($random7);
}
?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<form action="../../USER_DETAILS/updateDetails/" method="POST">
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

													<input type="text" class="form-control" name="user_first_name" value="<?php echo $user_first_name; ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Last Name</label>
													<input type="text" class="form-control" name="user_last_name" value="<?php echo $user_last_name; ?>">
												</div>
											</div>
										</div>
										<div class="row">

											<div class="col-md-4">
												<div class="form-group">
													<label class="bmd-label-floating">User Contact</label>
													<input type="number" class="form-control" name="user_phone_number" value="<?php echo $user_phone_number; ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="bmd-label-floating">Email address</label>
													<input type="email" class="form-control" name="user_email" value="<?php echo $user_email; ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="bmd-label-floating">Git link</label>
													<input type="text" class="form-control" name="user_git_link" value="<?php echo $user_git_link; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="bmd-label-floating">Address</label>
													<input type="text" class="form-control" name="user_address" value="<?php echo $user_address; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Age</label>
													<input type="number" class="form-control" name="user_age" value="<?php echo $user_age; ?>">
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
															<input type="text" class="form-control" name="user_school_name" value="<?php echo $user_school_name;?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">SSC Marks</label>
															<input type="text" class="form-control" name="user_ssc_marks" value="<?php echo $user_ssc_marks; ?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">HSC College Name</label>
															<input type="text" class="form-control" name="user_hsc_college_name" value="<?php echo $user_hsc_college_name; ?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">HSC Marks</label>
															<input type="text" class="form-control" name="user_hsc_marks" value="<?php echo $user_hsc_marks;?>">
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
															<input type="text" class="form-control" name="user_current_college_name" value="<?php echo $user_current_college_name; ?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="bmd-label-floating">Branch</label>
															<input type="text" class="form-control" name="user_current_college_branch" value="CMPN">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="bmd-label-floating">Current Aggregrate Pointer </label>
															<input type="text" class="form-control" name="user_current_pointer" value="<?php echo $user_current_pointer; ?>">
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
                                                $database_values = array($user_achivements, $language, $project_name, $user_experience_title, $curricular_name, $extra_curricular_name);
												for($i = 0; $i<count($contents_of_page); $i++){
											?>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="form-group">
														<label for="exampleFormControlTextarea1">
															<?php echo $contents_of_page[$i]; ?></label>
														<textarea class="form-control" id="<?php echo $contents_page_name[$i];?>" rows="3" name="<?php echo " $contents_page_name[$i]";?>"><?php echo $database_values[$i];?></textarea>
													</div>
												</div>
											</div>
										</div>
										<?php  }?>
										<button type="submit" class="btn btn-primary pull-right" name="update_proceed"> Proceed </button>
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

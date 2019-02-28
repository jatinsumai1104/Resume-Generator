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
<div class="custom-formating">
	<div class="row">
		<div class="col-md-3" style="border-right: solid 2px #777;">
			<div class=" mb-2">
				<span class="d-block d-lg-none"><?php echo $user_first_name." ".$user_last_name; ?></span>
				<span class="d-none d-lg-block">
					<img class="img-fluid img-profile rounded-circle" src="../../assets/img/faces/profile.jpg" alt="" width="300px;">
					<h3 class="text-center"><?php echo $user_first_name."".$user_last_name; ?></h3>
					<h5>Address: </h5>
					<p><?php echo $user_address; ?></p>
					<h5>Contact: </h5>
					<p><?php echo $user_phone_number ; ?></p>
					<h5>Email: </h5>
					<p><?php echo $user_email; ?></p>
					<h5>Age: </h5>
					<p><?php echo $user_age; ?></p>
				</span>
			</div>
		</div>
		<div class="col-md-9">
			<div class="container-fluid p-0">

				<section class=" p-3  d-flex flex-column" id="about">
					<div class="my-auto">
						<h1 class="mb-0 text-custom-color"><?php echo $user_first_name; ?>
							<span class="text-color"><?php echo $user_last_name; ?></span>
						</h1>
						<div class="subheading mb-5"><?php echo $user_address; ?>
							<a href="mailto:example@gmail.com"><?php echo $user_email; ?></a>
						</div>
						<p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
						<div class="social-icons">
							<a href="https://in.linkedin.com/pub/dir/<?php echo $user_first_name." ".$user_last_name; ?>">
								<i class="fab fa-linkedin-in"></i>
							</a>
							<a href="https://github.com/<?php echo $user_git_link; ?>">
								<i class="fab fa-github"></i>
							</a>
							<a href="https://twitter.com/<?php echo $user_first_name." ".$user_last_name; ?>">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="https://www.facebook.com/public/<?php echo $user_first_name." ".$user_last_name; ?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
					</div>
				</section>

				
				<?php if($user_experience_title != "no"){?>
				<hr class="m-1">
				<section class="p-3  d-flex flex-column" id="experience">
					<div class="my-auto">
						<h2 class="mb-5 text-custom-color">Experience</h2>

						<div class="resume-item d-flex flex-column flex-md-row mb-5">
							<div class="resume-content mr-auto">
								<h3 class="mb-0"><?php echo $user_experience_title; ?></h3>
							</div>
						</div>
					</div>

				</section>
				<?php } ?>
				<hr class="m-0">

				<section class="p-3  d-flex flex-column" id="education">
					<div class="my-auto">
						<h2 class="mb-5 text-custom-color">Education</h2>

						<div class="resume-item d-flex flex-column flex-md-row mb-5">
							<div class="resume-content mr-auto">
								<h3 class="mb-0"><?php echo $user_school_name; ?></h3>
								<div class="subheading mb-3">Secondary School Certificate</div>
								<p>Percent: <?php echo $user_ssc_marks; ?></p>
							</div>
							<div class="resume-date text-md-right">
								<span class="text-color">August 2001 - May 2014</span>
							</div>
						</div>

						<div class="resume-item d-flex flex-column flex-md-row">
							<div class="resume-content mr-auto">
								<h3 class="mb-0"><?php echo $user_hsc_college_name; ?></h3>
								<div class="subheading mb-3">Higher Secondary Certificate</div>
								<p>Percent : <?php echo $user_hsc_marks; ?></p>
							</div>
							<div class="resume-date text-md-right">
								<span class="text-color">August 2014 - May 2016</span>
							</div>
						</div>
						<div class="resume-item d-flex flex-column flex-md-row mb-5">
							<div class="resume-content mr-auto">
								<h3 class="mb-0"><?php echo $user_current_college_name; ?></h3>
								<div class="subheading mb-3">Degree College</div>
								<p>Aggregrate Pointer: <?php echo $user_current_pointer; ?></p>
							</div>
							<div class="resume-date text-md-right">
								<span class="text-color">August 2016 - May 2020</span>
							</div>
						</div>

					</div>
				</section>

				<hr class="m-0">

				<section class="p-3  d-flex flex-column" id="skills">
					<div class="my-auto">
						<h2 class="mb-5 text-custom-color">Skills</h2>

						<div class="subheading mb-3">Programming Languages &amp; Projects</div>
						<ul class="list-inline dev-icons">
							<?php $languages = preg_split("/,/", $language);
								foreach($languages as $lang){?>
								<li class="list-inline-item">
									<i class="fab fa-<?php echo trim($lang) ; ?>"></i>
								</li>
							<?php }?>
						</ul>
						
						<div class="subheading mb-3">Projects</div>
						<?php $projects_topic = preg_split("/,/", $project_name);?>
						<ul class="fa-ul mb-0">
							<?php foreach($projects_topic as $project){?>
								<li>
									<i class="fa-li fa fa-check"></i>
									<?php echo $project; ?>
								</li>
							<?php }?>
						</ul>
					</div>
				</section>

				<hr class="m-0">

				<section class="p-3  d-flex flex-column" id="interests">
					<div class="my-auto">
						<h2 class="mb-5 text-custom-color">Interests</h2>
						<p> <?php echo $curricular_name; ?></p>
						<hr class="m-0">
						<p> <?php echo $extra_curricular_name; ?></p>
					</div>
				</section>

				<hr class="m-0">

				<section class="p-3  d-flex flex-column" id="awards">
					<div class="my-auto">
						<h2 class="mb-5 text-custom-color">Awards &amp; Achivements</h2>
						<ul class="fa-ul mb-0">
							<?php $achivement = preg_split("/,/", $user_achivements);
								foreach($achivement as $achi){?>
								<li>
									<i class="fa-li fa fa-trophy trophy-color"></i>
									<?php echo $achi; ?>
								</li>
							<?php }?>
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
</div>

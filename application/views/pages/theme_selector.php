<div class="content">
	<div class="container-fluid">
		<p class="h1" style="text-align:center;margin: 20px;color: #111;">Choose Your Theme</p>
		<div class="row">

			<?php
			$template_name = array("Basic", "Prime Black", "Turtle Prime", "Little Gray", "Genius Sky Blue", "Simple Pink");
			$template_color = array("#ffffff", "#111111", "#92D6B5", "#2E3A42", "#1EA6D6", "#EAC7C5");
			
			for($i = 1;$i <= 6; $i++) {?>
			<div class="col-md-4">
				<div class="card card-profile ml-auto mr-auto" style="max-width: 360px;background: <?php echo $template_color[$i-1]?>; border:solid 2px #fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="card-header card-header-image">
						<a href="#pablo">
							<img class="img" src="../../assets/img/templates/template-<?php echo $i;?>.jpg">
						</a>
					</div>

					<div class="card-body ">
						<h4 class="card-title" style="color: #9C27B0;font-weight:400;font-size: 30px;">
							<?php echo $template_name[$i-1];?>
						</h4>
						<?php if($i <= 3) { ?>
						<h5 class="card-category" style="color: #9C27B0;">One Of our Basic Template Design</h5>
						<?php } else { ?>
						<h5 class="card-category" style="color: #9C27B0;">Pro Version Templates</h5>
						<?php } ?>

					</div>
					<div class="card-footer justify-content-center">
						<a href="../../USER_DETAILS/fetchDetailsForResume/" class="btn btn-just-icon btn-round">
							<i class="fa fa-check"></i>
						</a>
						<a href="../../USER_DETAILS/fetchDetailsForResume/" class="btn btn-just-icon btn-round">
							<i class="fa"> X </i>
						</a>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>

<?php include("includes/header.php")?>
	
	<title>KanKook - Register page</title>

<?php include("includes/nav.php")?>

	<!-- Contact section
	================================================== -->
	<section id="contact">
		<div class="container">

			<div class="col-md-3"></div>
			<div class="wow fadeInUp col-md-6" data-wow-delay="1.6s">
				<h1 style="text-align: center"> Enter The Kitchen!</h1>
				<div class="contact-form">
					<form id="contact-form" method="post" action="#">
						<input name="username" type="text" class="form-control" placeholder="First Name" required>
						<input name="firstname" type="text" class="form-control" placeholder="First Name" required>
						<input name="lastname" type="text" class="form-control" placeholder="Last Name" required>
						<input name="email" type="email" class="form-control" placeholder="Your Email" required>
						<input name="password" type="password" class="form-control" placeholder="Password" required>
						<input name="confirmpassword" type="password" class="form-control" placeholder="Confirm password" required>
						<div class="contact-submit">
							<input type="submit" class="form-control submit" value="Submit">
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="clearfix"></div>
		</div>
	</section>


<?php include("includes/footer.php");?>
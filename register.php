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
					<form id="contact-form" method="post" action="requires/user_register.php">
					<?php include("requires/errors.php"); ?>
						<input name="username" class="form-control" type="text"  required placeholder="username"
							   	oninvalid="this.setCustomValidity('Please enter a username')" oninput="setCustomValidity('')"></input>
						<input name="firstname" type="text" class="form-control" placeholder="First Name" required=""
								oninvalid="this.setCustomValidity('Please enter your firstname')" oninput="setCustomValidity('')"></input>
						<input name="lastname" type="text" class="form-control" placeholder="Last Name" required=""
								oninvalid="this.setCustomValidity('Please enter your lastname')" oninput="setCustomValidity('')"></input>
						<input name="email" type="email" class="form-control" placeholder="Your Email" required=""
								oninvalid="this.setCustomValidity('Please enter a valid email address')" oninput="setCustomValidity('')"></input>
						<input name="password_1" type="password" class="form-control" placeholder="Password" value="<?php echo $password_1; ?>">
						<input name="password_2" type="password" class="form-control" placeholder="Confirm password" value="<?php echo $password_2; ?>">
						<div class="contact-submit">
							<input type="submit" class="form-control submit" name="register_req" value="REGISTER">
							<a href="login.php">I already have an account</a>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="clearfix"></div>
		</div>
	</section>


<?php include("includes/footer.php");?>
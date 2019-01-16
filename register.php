<?php include("includes/header.php")?>
	
	<title>KanKook - Register page</title>

<?php include("includes/nav.php")?>

	<!-- Contact section
	================================================== -->
	<section id="contact">
		<div class="container">

			<div class="col-md-3"></div>
			<div class="wow fadeInUp col-md-6" data-wow-delay="1s">
				<h1 style="text-align: center"> Enter The Kitchen!</h1>
				<div class="contact-form">
					<form id="contact-form" method="post" action="">
					<?php include ("requires/user_register.php");?>
					<?php if(!empty($success_message)){?><div class="success-message"><?php if(isset($success_message)) echo $success_message;?> </div> <?php } ?>
					<?php foreach ($error_message as $error) { ?> <div class="error-message"><?php echo $val; ?></div> <?php } ?>
						<input name="username" class="form-control" type="text"  required placeholder="username"></input>
						<input name="firstname" type="text" class="form-control" placeholder="First Name" required></input>
						<input name="lastname" type="text" class="form-control" placeholder="Last Name" required></input>
						<input name="email" type="email" class="form-control" placeholder="Your Email" required></input>
						<input name="password_1" type="password" class="form-control" placeholder="Password" required>
						<input name="password_2" type="password" class="form-control" placeholder="Confirm password" required>
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
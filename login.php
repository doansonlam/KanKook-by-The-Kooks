<?php include("includes/header.php")?>
   
    <title>KanKook - Contact</title>
    
<?php include("includes/nav.php")?>


        <!-- Login section
================================================== -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="wow fadeInUp col-md-6" data-wow-delay="1.3s">
                        <h1 style="text-align: center">Sign In</h1>
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="/requires/user_login.php">
                            <?php include("requires/errors.php"); ?>
                                <input name="username" type="text" class="form-control" placeholder="Username" >
                                <input name="password" type="password" class="form-control" placeholder="Password" >
                                <div class="contact-submit">
                                    <input type="submit" class="form-control submit" name="login_req">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>
        </section>


<?php include("includes/footer.php");?>

<?php include("includes/header.php")?>

      <title>KanKook - Homepage</title>

<?php include("includes/nav.php")?>

      <!-- Header section
      ================================================== -->
      <section id="header" class="header-one">
            <div class="container">
                  <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8"></div>
                        <h1 style="font-size: 50px"> Search for food now ! </h1>
                  </div>
                  <br>
                  <div>
                        <div class="wow fadeInUp" data-wow-delay="1.9s">
                              <div class="search-box" style="padding-bottom: 20px">
                                    <input class="search-txt" type="text" name="" placeholder="Type to search">
                                    <a class="search-btn" href="#">
                                          <i class="fa fa-search"></i>
                                    </a>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-2"></div>
            </div>
      </section>



      <!-- Portfolio section
 ================================================== -->
      <section id="portfolio">
            <div class="container">
                  <div class="row">

                        <div class="col-md-12 col-sm-12">

                              <!-- iso section -->
                              <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                                    <ul class="filter-wrapper ">
                                          <li>
                                                <a href="#" data-filter="*" class="selected opc-main-bg" style="border-radius:40px">All</a>
                                          </li>
                                          <li>
                                                <a href="#" class="opc-main-bg" data-filter=".graphic" style="border-radius:40px">Appetizer</a>
                                          </li>
                                          <li>
                                                <a href="#" class="opc-main-bg" data-filter=".template" style="border-radius:40px">Main Course</a>
                                          </li>
                                          <li>
                                                <a href="#" class="opc-main-bg" data-filter=".photoshop" style="border-radius:40px">Dessert</a>
                                          </li>
                                    </ul>

                                    <!-- iso box section -->
                                    <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                                          <div class="iso-box-wrapper col4-iso-box">

                                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                                      <div class="portfolio-thumb">
                                                            <img src="images/portfolio-img1.jpg" class="img-responsive" alt="Portfolio">
                                                            <div class="portfolio-overlay">
                                                                  <div class="portfolio-item">
                                                                        <a href="recipe-page.html">
                                                                              <i class="fa fa-link"></i>
                                                                        </a>
                                                                        <h2>Project One</h2>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="iso-box graphic template col-md-4 col-sm-6">
                                                      <div class="portfolio-thumb">
                                                            <img src="images/portfolio-img2.jpg" class="img-responsive" alt="Portfolio">
                                                            <div class="portfolio-overlay">
                                                                  <div class="portfolio-item">
                                                                        <a href="recipe-page.html">
                                                                              <i class="fa fa-link"></i>
                                                                        </a>
                                                                        <h2>Project Two</h2>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
      </section>

<?php include("includes/footer.php");?>
 
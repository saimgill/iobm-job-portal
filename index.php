<?php 
$ipAddress = $_SERVER['REMOTE_ADDR'];

$conn = mysqli_connect('localhost', 'root', '', 'iobm_job_portal');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "INSERT INTO `hits` (`ipAddress`) VALUES ('$ipAddress')");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Portal | Institute of Business Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logoiobm.png" type="image/png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-navbar-wrap bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-4">
                
    
                <a href="index.html"><img src="images/download.png" class="col-md-12 col-lg-12 col-sm-12 col-xs-12"/></a>
                
              </div>
              <div class="col-8">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="index.html">Home</a>
                      </li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li class="has-children">
                        <a href="#">Login</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="admin/login-admin.php">As Admin</a></li>
                          <li><a href="employer/login-employer.php">As Employer</a></li>
                          <li><a href="student/login-student.php">As Student/Alumni</a></li>
                        </ul>
                      </li>
                      <li></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="slide-one-item home-slider owl-carousel">
      
      

      <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <h1 style="text-align: center; padding-top: 150px;">We Help You Find Your <strong>Dream Job</strong></h1>
          
          <!--<section class="search-sec">
            <div class="container">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Enter Keyword(s)">
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn">Search</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            
          </section>-->
          <div class="col-lg-12 col-md-12" style="padding-top: 80px;">
            <form class="form-inline">
              
              <div class="form-group col-lg-12 col-md-12" >
                <input type="text" class="form-control col-lg-9 col-md-9 col-sm-9 col-xs-9" placeholder="Enter Keyword(s)"/>
                <input type="submit" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3 btn btn-danger" value="SEARCH"/>
              </div>
              
            </form>
          </div>
          <span class="stage">
            <a href="#number-total"  class="box bounce-6"><h1><strong><i class="fa fa-angle-double-down"></i></strong></h1></a>
          </span>
        </div>
        
      </div> 

    </div>

    <div class="border-bottom" id="number-total">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="display-4 darkcolor" style="color: #840023; "><i><b><strong>197</strong></b></i></span>
            </span>
            <h2>Total Jobs</h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5">
            <span class="d-block mb-3">
              <span class="display-4 darkcolor" style="color: #840023; "><i><b><strong>223</strong></b></i></span>
            </span>
            <h2>Total Internships</h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="display-4 darkcolor" style="color: #840023; "><i><b><strong>1,800</strong></b></i></span>
            </span>
            <h2>Students Registered</h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5">
            <span class="d-block mb-3">
              <span class="display-4 darkcolor" style="color: #840023; "><i><b><strong>118</strong></b></i></span>
            </span>
            <h2>Companies Registered</h2>
          </div>
        </div>
      </div>
    </div> <!-- .block-feature -->

   

    

    <div class="block-schedule overlay site-section" style="background-image: url('images/hero_bg_11.jpg');">
      <div class="container">

        <h2 class="text-white display-4 mb-5">Latest Postings</h2>

        <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-jobs-tab" data-toggle="pill" href="#pills-jobs" role="tab" aria-controls="pills-jobs" aria-selected="true">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-internships-tab" data-toggle="pill" href="#pills-internships" role="tab" aria-controls="pills-internships" aria-selected="true">Internships</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-jobs" role="tabpanel" aria-labelledby="pills-jobs-tab">
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Web Developer</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>Nexus Corp.</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 1 day ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">HR Trainee</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>AKUH</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 3 days ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Data Analyst</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>Afiniti</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 4 days ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-internships" role="tabpanel" aria-labelledby="pills-internships-tab">
            
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Content Writer - Intern</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>Nexus Corp.</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 1 day ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">IT Intern</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>AKUH</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 3 days ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">SQA Associate</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>Afiniti</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 4 days ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>

            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Associate Data Engineer</h3></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-building-o mr-3"></span>Afiniti</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span> 4 days ago</div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#" class="btn btn-primary pill px-4 mt-3 mt-md-0">login to view</a></div>     
              </div>
            </div>
          </div>

          
        </div>

        

      </div>      
    </div>


    <div class="featured-classes bg-light py-5 block-13">
      <div class="container">
        
        <div class="heading-with-border">
          <h2 class="heading text-uppercase">Companies Registered</h2>
        </div>

        <div class="nonloop-block-13 owl-carousel">
          
          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c1.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c2.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c3.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c4.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c5.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c6.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c7.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c8.png" alt="Image" class="img-fluid">
          </div>

          <div class="block-media-1 heading-with-border">
            <img src="images/companies/c9.png" alt="Image" class="img-fluid">
          </div>
          

          
        </div>

      </div>
    </div>

    



    
    
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-lg-7">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-8 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4 text-primary">About</h3>
                <p style="color: #909090;">The Institute of Business Management aspires to be one of the leading institutions, nationally and internationally, for learning, research, innovation and adding value to society. </p>
                <p><a href="about.html" class="btn btn-primary pill text-white px-4">Read More</a></p>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4 text-primary">Quick Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="index.html"><strong>Home</strong></a></li>
                  <li><a href="about.html"><strong>About</strong></a></li>
                  <li><a href="contact.html"><strong>Contact</strong></a></li>
                  <li><a href="Panels/student/login-student.html"><strong>Login</strong></a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row mb-5">
              <div class="col-md-12"><h3 class="footer-heading mb-4 text-primary">Contact Info</h3></div>
              <div class="col-md-6">
                <p style="color: #909090;">Korangi Creek Karachi Sindh,<br>Pakistan 75190</p>    
              </div>
              <div class="col-md-6" style="color: #909090">
                (+92 21) 111 002 004
                <br>
                info@iobm.edu.pk
              </div>
            </div>

            <div class="row">
              <div class="col-md-12"><h3 class="footer-heading mb-4 text-primary">Follow Us</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="https://www.facebook.com/official.iobm/" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/iobm_official" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/iobm_official/" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="https://www.youtube.com/channel/UCP2FntHiZOVF_tsJ2DlDsOg" class="p-2"><span class="icon-youtube"></span></a>
                  <a href="https://www.linkedin.com/school/iobm-official/?originalSubdomain=pk" class="p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>

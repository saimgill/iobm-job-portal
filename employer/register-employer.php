<?php 
    include("includes/dbcon.php");
    include("includes/register-employer.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Employer Registeration | The IoBM Job Portal</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Css files -->
        <!-- Icons -->
        <link href="css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
        <link rel="icon" href="img/logosm.png" type="image/png"/>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    </head>
    <body class="login-page" style="background-image: url('img/hero_bg_2.jpg'); background-repeat: no-repeat;">
        <!-- Start login container -->
        <div class="container login-container" style="width: 50%;">
            <div class="login-panel panel panel-default plain animated bounceIn">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h4 class="panel-title text-center">
                        <div class="col-md-3"></div>
                        <a href="../index.php"><img id="logo" src="img/logo-dark.png" alt="Dynamic logo" class="col-md-6"></a>
                    </h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal mt10" action="register-employer.php" method="POST" id="register-form" enctype="multipart/form-data" role="form" onsubmit="return checkpass()">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <h3 style="text-align: center;">Employer Registeration</h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="text" name="name" class="form-control"  placeholder="Company Name" value="<?php echo htmlspecialchars($name); ?>">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="email"  name="email" class="form-control"  placeholder="Company Email" value="<?php echo htmlspecialchars($email); ?>">
                                    <p style="color:red;"><?php echo $errors['email']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Company Logo</label>
                                    <input type="file" name="photo"  class="form-control col-lg-8 col-md-8 col-xs-8 col-sm-8"  placeholder="Company Logo">
                                    <p>Only .jpg and .png file accepted.</p>
                                    <p style="color:red;"><?php echo $errors['logo']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="text" name="website" class="form-control"  placeholder="Company Webiste" value="<?php echo htmlspecialchars($website); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="text" name="address"  class="form-control"  placeholder="Company Address" value="<?php echo htmlspecialchars($address); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="tel" pattern="[0][3][0-9]{2}[0-9]{7}" name="contact"  class="form-control"  placeholder="HR Contact" value="<?php echo htmlspecialchars($contact); ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="password" name="password1" id="password1" class="form-control"  placeholder="Password">
                                    <p style="color:red;"><?php echo $errors['password']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group input-icon">
                                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
                                    <p id="p-message"></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-3"></div>
                        <input type="submit" name="submit" class="col-md-6 btn" id="subcbtn" value="Register"/>
                        
                    </form>
                    
                </div>
                
            </div>
            <!-- End .panel -->
        </div>
        <!-- End login container -->
        
        <!-- Javascripts -->
        <script src="js/custom.js"></script>

        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="assets/js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="assets/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="js/bootstrap/bootstrap.js"></script>
        <!-- Form plugins -->
        <script src="plugins/forms/validation/jquery.validate.js"></script>
        <script src="plugins/forms/validation/additional-methods.min.js"></script>
        <!-- Init plugins olny for this page -->
        <script src="js/pages/login.js"></script>
    </body>
</html>
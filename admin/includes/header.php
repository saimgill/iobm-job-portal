<?php 
    session_start();
    if(!isset($_SESSION['admin'])){
        header("location: ../index.php");
        // echo"<script> window.location.replace('http://localhost/IoBM-Job-Portal-master/Panels/student/login-student.php'); </script>";
    }

    else{
        include("dbcon.php");
        $sId = $_SESSION['admin'];
        $sql = "SELECT * FROM admin WHERE sId='$sId'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
        // output data of each row
       
?>
<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>The IoBM Job Portal</title>
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

        <!-- jquery -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>    
        <!-- summernote   -->

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- .page-navbar -->
        <div id="header" class="page-navbar">
            <!-- .navbar-brand -->
            <a href="user.html" class="navbar-brand hidden-xs hidden-sm">
                <img src="img/logo.png" class="logo hidden-xs" alt="Dynamic logo">
                <img src="img/logosm.png" class="logo-sm hidden-lg hidden-md" alt="Dynamic logo">
                 
            </a>
            <!-- / navbar-brand -->
            <!-- .no-collapse -->
            <div id="navbar-no-collapse" class="navbar-no-collapse">
                <!-- top left nav -->
                <ul class="nav navbar-nav">
                    <li class="toggle-sidebar" id="menubut">
                        <a href="#">
                            <i class="fa fa-reorder"></i>
                            <span class="sr-only">Collapse sidebar</span>
                        </a>
                    </li>
                    
                </ul>
                <!-- / top left nav -->
                <!-- top right nav -->
                <ul class="nav navbar-nav navbar-right">
                    
                    <li id="otherbut">
                        <a href="settings.php">
                            <i class="fa fa-cog setlogbtn"></i>
                            <span class="sr-only ">Settings</span>
                        </a>
                        
                    </li>
                    <li id="otherbut">
                        <a href="logout.php">
                            <i class="fa fa-power-off setlogbtn"></i>
                            <span class="sr-only">Logout</span>
                        </a>
                    </li>
                   
                </ul>
                <!-- / top right nav -->
            </div>
            <!-- / collapse -->
        </div>
        <!-- / page-navbar -->
        <!-- #wrapper -->
        <div id="wrapper">
            <!-- .page-sidebar -->
            <aside id="sidebar" class="page-sidebar hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Profile</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <?php  while($admin = mysqli_fetch_assoc($result)) { ?>
                        <div class="user-info clearfix">
                            <a href="dashboard.php"><img src="../userFiles/adminImgs/<?php echo $admin['photo']; ?>" alt="avatar"></a>
                            <span class="name"><?php echo $admin['name']; ?></span>
                            <div class="btn-group">
                                <div type="button" class="btn btn-default btn-xs" style="margin-top: 5px ;"><i class="fa fa-group"></i>
                                </div>
                                <div type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="margin-top: 5px ;">Admin
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Navigation</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <!-- .side-nav -->
                        <div class="side-nav">
                            <ul class="nav">
                                <li>
                                    <a href="dashboard.php" class="actlogic"><i class=" l-arrows-right-double-31"></i><span class="txt">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="user.php" class="actlogic"><i class=" l-arrows-right-double-31"></i><span class="txt">Profile</span></a>
                                </li>
                                <li>
                                    <a href="staff.php" class="actlogic"><i class=" l-arrows-right-double-31"></i><span class="txt">Staff</span></a>
                                </li>
                                <li>
                                    <a href="employers.php" class="actlogic"><i class=" l-arrows-right-double-31"></i><span class="txt">Employers</span></a>
                                </li>
                                <li>
                                    <a href="members.php" class="actlogic"><i class=" l-arrows-right-double-31"></i><span class="txt">Members</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class=" l-arrows-right-double-31"></i> <span class="txt">Jobs</span></a>
                                    <ul class="sub">
                                        <li><a href="jobapproval.php"><span class="txt">Waiting Approval</span></a>
                                        </li>
                                        <li><a href="joblist.php"><span class="txt">All Jobs</span></a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="messagecenter.php"><i class=" l-arrows-right-double-31"></i><span class="txt">Message Center</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- / side-nav -->
                        <!--  .sidebar-panel -->
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
                <?php }}} ?>
            </aside>
            <!-- / page-sidebar -->
           
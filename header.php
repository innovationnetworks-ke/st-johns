<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Ngugi david" />
<!-- Document Title -->
<title>St John Medical Clinic</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="assets/jquery-3.6.0.min.js"></script>

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->

    
    <!-- Nav -->
    <nav class="navbar">
      <div class="containe" style="margin:0px !important">        
        <div class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">

                      <div class="navbar-header pull-left">
                          <button class="navbar-toggle" style="background:deepskyblue !important" data-target="#mobile_menu" data-toggle="collapse"><span class="fa fa-bars" style="size:1.5rem !important"></span></button>
                          <a href="#" class="navbar-brand">ST JOHNS MEDICAL CLINIC</a>
                      </div>

                      <div class="navbar-collapse collapse pull-right" id="mobile_menu">
                          <ul class="nav navbar-nav">
                          <li> <a href="index.php">Home </a></li>
                          <li> <a href="services.php">Services </a></li>
                          <li><a href="about.php">About</a></li>            
                          <li><a href="patientappointment.php">Appointment </a></li>
                          <li><a href="contact.php">Contact </a></li>

                          </ul>
                          <ul class="nav navbar-nav">
                              <li>
                                  <form action="" class="navbar-form">
                                      <div class="form-group">
                                          <div class="input-group">
                                              <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                          </div>
                                      </div>
                                  </form>
                              </li>
                          </ul>

                          <ul class="nav navbar-nav navbar-right pull-right">
                              <?php if(isset($_SESSION['login'])):?>
                              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                              <?php endif ?>
                              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li class="d"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In </a>
                                        <div class="dropdown">
                                          <ul class="dropdown-menu multi-level" style="display: block !important;margin-left:10% !important;">
                                            <li class="ml-2"><a href="adminlogin.php">Admin</a></li>
                                            <li class="ml-2"><a href="doctorlogin.php">Doctor</a></li>
                                            <li class="ml-2"><a href="patientlogin.php">Patient </a></li>
                                          </ul>
                                        </div>
                                      </li>
                                      <!-- <li><a href="#">Sign Up</a></li> -->
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </nav>
        <!-- NAV -->

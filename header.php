<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <!--[if IE]>
<link type="text/css" rel="stylesheet" href="css/ie.css">
<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Demo Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">       
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/webkit.css">       
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->  
		<?php
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		?>              
        <div>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navTop">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        </button>
                        <a class="navbar-brand" id="logo" href="#">LOGO</a>                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">                    
                        <ul class="nav navbar-nav" id="topMenu">
                            <li id ="home"><a class="active" href="index.php">Home</a></li>
                            <li id = "about"><a href="about.php">About</a></li>
                            <li id = "services"><a href="services.php">Services</a>                            </li>
                            <li id = "projects"><a href="projects.php">Projects</a></li>
                            <li id = "support"><a href="support.php">Support</a></li>
                            <li id = "contact"><a href="contact.php">Contact</a></li>
                        </ul>          
                    </div>
                </div> 
            </div>                        
        </nav>
        </div>
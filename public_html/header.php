<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>ACFOLA</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/nob.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo300.png" alt="ACFOLA" style="width: 158px; height: 40px;"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <?php
                $file = basename($_SERVER['PHP_SELF']);
                ?>
                <li class="<?php if($file == 'index.php') echo 'active'; ?>"><a href="index.php">Home</a></li>
                <li class="<?php if($file == 'about.php') echo 'active'; ?>"><a href="about.php">About Us</a></li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left.html">Left Sidebar</a></li>
                        <li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
                    </ul>
                </li>-->
                <li class="<?php if($file == 'contact.php') echo 'active'; ?>"><a href="contact.php">Contact</a></li>
                <!--<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->
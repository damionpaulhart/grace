<?php
 require_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GRACE TRAILER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Grace Trailer Service">
    <meta name="author" content="Grace Trailer Service">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
	<link type="text/css" href="assets/css/css/smoothness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
    <style>
     /* body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar 
      }
	  */
	   #border {
		   width:768px;
		   border:solid 1px #000000;
	   }
	   .center {text-align:center}
	  @media print
  		{
			body 	{padding-top: 0px;}
  			.navbar {display:none;}
			#border {border:solid 0px #000000;}
			#footer-links {display:none;}
			footer {display:none;}
			#tools {display:none;}
		}
    </style>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.php">Grace Tralier Service</a>
        <div class="nav-collapse">
                  <ul class="nav">
            <li <?php if ($title == 'Grace Trailer Service') { echo 'class="active"'; } ?>><a href="index.php">Forms</a></li>
			<li <?php if ($title == 'Search') { echo 'class="active"'; } ?>><a href="search.php">Search</a></li>       
          </ul>
            <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown"><? echo $user; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="profile.php">Profile</a></li>
                <?php if ($role == 'admin') { ?>
                	<li><a href="profiles.php">Edit Inspectors</a></li>
                <?php } ?>
                <li class="divider"></li>
                <li><a href="profile-logout.php">Log Out</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-right" action="search.php">
            <input type="text" class="search-query span2" placeholder="Search" name="q" id="q">
          </form>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  
<div class="container">
<!-- ================================================== -->
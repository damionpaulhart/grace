<!-- does not use header or footer because not logged in -->
<?php

// did we GET an error from login-check?
$errorLogin = $_GET['error'];

// If logged in goto index.php
if($_SESSION['signed_in'] == true)  
{  
	header('Location: index.php');
	exit;
}
else{ ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/exceptions.css" rel="stylesheet">
    <style>
body {
	padding-top: 60px;  60px to make the container go all the way to the bottom of the topbar */
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
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
     <span class="icon-bar"></span>
      <span class="icon-bar"></span>
       <span class="icon-bar"></span> </a>
        <div class="brand">Grace Trailer Service</div>
        </div>
  </div>
    </div>
<div class="container">
<div class="row">
	<div class="span4 offset4">
	<img src="grace_logo.png" width="305" height="162">
	</div>
</div>
<p>&nbsp;</p>
<?php

if($errorLogin) {
	?>
<div class="alert alert-error">
<a class="close" data-dismiss="alert">×</a>
<b>Try Again.</b> Username or Password incorrect.
 </div>
<?php
}
?>
 
 <form class="form-vertical span3 offset4" id="register" name="register" method="post" action="profile-login-check.php">
    <fieldset>
          <!--<legend>Please Login:</legend>-->
          <div class="control-group">
        <label class="control-label" for="user_name">Inspector</label>
        <div class="controls">
              <input type="text" class="input span3" name="user_name" id="user_name">
            </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="user_password">Password</label>
        <div class="controls">
              <input type="password" class="input span3" name="user_password" id="user_password">
            </div>
      </div>
      <div class="form-actions">
      <div style="float:left">
      <!-- <a href="profile/reg.php" data-original-title="">Request Account</a><br>-->
      <a href="profile-password.php" data-original-title="">Forgot Password</a>
      </div>
            <button type="submit" id="login" name="login" class="btn btn-primary btn-large pull-right">Login</button>
          </div>

        </fieldset>
  </form>
    </div>
 <!-- /container --> 

<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/bootstrap-transition.js"></script> 
<script src="assets/js/bootstrap-alert.js"></script> 
<script src="assets/js/bootstrap-modal.js"></script> 
<script src="assets/js/bootstrap-dropdown.js"></script> 
<script src="assets/js/bootstrap-scrollspy.js"></script> 
<script src="assets/js/bootstrap-tab.js"></script> 
<script src="assets/js/bootstrap-tooltip.js"></script> 
<script src="assets/js/bootstrap-popover.js"></script> 
<script src="assets/js/bootstrap-button.js"></script> 
<script src="assets/js/bootstrap-collapse.js"></script> 
<script src="assets/js/bootstrap-carousel.js"></script> 
<script src="assets/js/bootstrap-typeahead.js"></script>
</body>
</html>

 
 <?php
 }
 ?>
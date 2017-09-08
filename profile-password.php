<!-- does not use header or footer because not logged in -->
<?php
 session_start();
 require_once 'connect.php';

 // did we GET an error from password-check?
$message = $_GET['message'];

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
    <title>PASSWORD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/exceptions.css" rel="stylesheet">
    <style>
body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
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
    
    <script>
function getID(id) { return document.getElementById(id); }
</script>
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

<?php if ($message == 'error') { ?>
	<div class="alert alert-error">
	<a class="close" data-dismiss="alert">×</a>
	<b>Contact Support.</b> Email not found.
 </div>
<?php } elseif ($message == 'success') { ?>
	<div class="alert alert-success">
	  <a class="close" data-dismiss="alert">×</a>
	<strong>Success!</strong> Your Password Has Been Sent To Your Email Address.
	</div>
<?php } ?>
 
 <form class="form-vertical span3 offset4" id="resetPassword" name="resetPassword" method="post" action="profile-password-check.php">
    <fieldset>
          <legend>Forgotten Password?</legend>
          <div class="control-group">
        <label class="control-label" for="user_email">Your Email</label>
        <div class="controls">
              <input type="text" class="input span3" name="user_email" id="user_email">
            </div>
      </div>
      <div class="form-actions">
            <button type="submit" id="reset" name="reset" class="btn btn-primary">Reset Password</button>
            <button class="btn" onclick="getID('resetPassword').action='profile-login.php';getID('resetPassword').submit(); return false;">Cancel</button>
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
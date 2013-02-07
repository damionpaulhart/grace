<?php
// auth.php
session_start();
require 'connect.php';
 
// are we already signed in?
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) 
{
	$user = $_SESSION['user_name'];
	$role = $_SESSION['user_role'];
	$user_image_url = $_SESSION['user_image_url'];
}
else // not signed in goto login
{
	header('Location: profile-login.php');
	exit;
}

?>
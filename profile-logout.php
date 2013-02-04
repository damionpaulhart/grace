<?php
 session_start();#This will start the session
 session_unset(); #Session_unset and Session_destroy
 session_destroy();#Will remove all sessions.
 header("location:index.php"); // index.php will redirect to login.php
?>
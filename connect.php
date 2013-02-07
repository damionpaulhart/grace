<?php
//connect.php
$server = 'localhost';
$username   = 'damionha_form';
$password   = 'webpass';
$database   = 'damionha_form';

if(!mysql_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection with error:' . mysql_error());
}
if(!mysql_select_db($database))
{
    exit('Error: could not select the database');
}
?>
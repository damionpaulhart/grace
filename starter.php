<?php
($_REQUEST["action"] == 'view')?$formViewer=1:$formViewer=0; // we are viewing not adding
require_once 'header.php';
if($formViewer) // we are viewing not adding
{
	$entryID = $_REQUEST["entry"];
	$result = mysql_query("SELECT * FROM $form_name WHERE entryID = $entryID" ) or die(mysql_error());
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
}
require_once 'logo.php';
?>
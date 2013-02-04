<?php
require_once("auth.php");

$formName = $_REQUEST['form'];
$sql = 'DELETE FROM ' . $_REQUEST['form'] . ' WHERE entryID = ' . $_REQUEST['entry']; 
//$sql = sprintf('INSERT INTO %s (%s) VALUES ("%s")', $formName, implode(', ', array_map('mysql_real_escape_string', array_keys($newarray))), implode('", "', array_map('mysql_real_escape_string', $newarray)));

$result = mysql_query($sql);  
        if(!$result)  
        {  
            //something went wrong, display the error  
            echo 'Something went wrong while saving.</br></br>'; 
            echo 'Error Message: <strong>' . mysql_error() . '</strong></br></br>';
			echo 'Report this error or <a href="#" onclick="history.go(-1);return false;">go back</a> to try again.'; //debugging purposes, uncomment when needed 
        } 
        else 
        { 
            // echo 'Form successfully saved. <a href="index.php">Return Home</a>';
			header("location:complete.php");
        } 

?>
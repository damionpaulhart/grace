<?php
require_once("auth.php");



// save form name to variable before unset it.
$formName = $_POST['form_name'];
// copy $_POST into a new array
$newarray = $_POST;
// Remove "form_name" and the key item
	unset($newarray['form_name']);
// Remove last item (submit button)
	// could do ... unset($a[count($a)-1]);
	array_pop($newarray);
$sql = sprintf('INSERT INTO %s (%s) VALUES ("%s")', $formName, implode(', ', array_map('mysql_real_escape_string', array_keys($newarray))), implode('", "', array_map('mysql_real_escape_string', $newarray)));

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
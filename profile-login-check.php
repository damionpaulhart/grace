<?php 
 session_start();
 require_once 'connect.php';

// SQL
$sql = "SELECT
			user_id,
			user_name,
			user_role,
			user_image_url
		FROM
			users
		WHERE
			user_name = '" . mysql_real_escape_string($_POST['user_name']) . "'
		AND 
            user_password = '" . $_POST['user_password'] . "'";
			
$result = mysql_query($sql);

if(!$result)
{
	//something went wrong go back to login
	//header("location:login.php?error=error_sql"); 
	echo mysql_error(); //debugging purposes, uncomment when needed
} 
else
{
	if(mysql_num_rows($result) == 0) // no results
	{ 
		// wrong/username combination
		header("location:profile-login.php?error=error_login"); 
	}
	else // yes. results.
	{
		//set the $_SESSION['signed_in'] variable to TRUE
		$_SESSION['signed_in'] = true;
		//we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
		while($row = mysql_fetch_assoc($result))
		{
			$_SESSION['user_id']    = $row['user_id'];
			$_SESSION['user_name']  = $row['user_name'];
			$_SESSION['user_role'] = $row['user_role'];
			$_SESSION['user_image_url'] = $row['user_image_url'];
		}
		// login complete, goto index
		header("location:index.php");
	}
}
 ?>
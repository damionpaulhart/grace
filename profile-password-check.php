<?

require_once 'connect.php';

if (empty($_POST['user_email'])) 
{
	$error = "Error: No email sent.";
	header ('location: password.php?error=true');
}
else
{
	$email = $_POST['user_email'];
	$sql="SELECT user_password FROM users WHERE user_email='$email'";
	$result=mysql_query($sql);

	// if found this e-mail address, row must be 1 row
	// keep value in variable name "$count"
	$count=mysql_num_rows($result);

	// compare if $count =1 row
	if($count==1)
	{

		$rows=mysql_fetch_array($result);

		// keep password in $your_password
		$your_password=$rows['user_password'];

		// ---------------- SEND MAIL FORM ----------------

		// send e-mail to ...
		$to=$email;

		// Your subject
		$subject="Requested Profile Information";

		// From
		$header="from: Grace Trailer";

		// Your message
		$messages= "Your password for login to our website \r\n";
		$messages.="Your password is $your_password \r\n";

		// send email
		$sentmail = mail($to,$subject,$messages,$header);

	}
	// else if $count not equal 1
	else 
	{
		//echo "Not found your email in our database";
		header("location:profile-password.php?message=error");
			 exit;
	}

	// if your email succesfully sent
	if($sentmail)
	{
		header("location:profile-password.php?message=success");
			 exit;
	}
	else 
	{
		echo "Cannot send password to your e-mail address";
	}
}
	 
?>
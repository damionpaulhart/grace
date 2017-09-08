<?php
session_start();

/* 
    Upload an image and return the uploaded image name 
*/ 
function uploadImage($inputName, $uploadDir) 
{ 
    $image     = $_FILES['user_image_url'];
    $imagePath = '';
     
    // if a file is given 
    if (trim($image['tmp_name']) != '') { 
        // get the image extension 
        $ext = substr(strrchr($image['name'], "."), 1); 

        // generate a random new file name to avoid name conflict 
        $imagePath = md5(rand() * time()) . ".$ext"; 
         
        // check the image width. if it exceed the maximum 
        // width we must resize it 
        $size = getimagesize($image['tmp_name']); 
         
        //if ($size[0] > 200) { 
           // $imagePath = createThumbnail($image['tmp_name'], $uploadDir . $imagePath, 200); 
        //} else { 
            // move the image to category image directory 
            // if fail set $imagePath to empty string 
            if (!move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath)) { 
                $imagePath = ''; 
            } 
        //}     
    } 
    return $imagePath; 
} 




if
(
	isset( $_POST['user_name'] ) &&
 	isset( $_POST['user_password'] ) &&
 	isset( $_POST['user_email'] )
)
{	// check for errors
 	if( strlen( $_POST['user_name'] ) < 4 )
 	{
 			echo "Inspector Name Must Be More Than 4 Characters.";
 	}
 	elseif( strlen( $_POST['user_password'] ) < 4 )
 	{
 			echo "Password Must Be More Than 4 Characters.";
 	}
 	elseif( $_POST['user_password'] == $_POST['user_name'] )
 	{
 			echo"Insepctor Name And Password Can Not Be The Same.";
 	}
 	else // no errors
 	{
 		include( 'connect.php' );

 			$username = mysql_real_escape_string( $_POST['user_name'] );
 			//$password = md5( $_POST['pass'] );
 			$password = $_POST['user_password'];
			$email = $_POST['user_email'];
			$role = user;
			//$image = $_FILES['user_image_url'];
			if ($_FILES["user_image_url"]["error"] > 0)
    			{
    				$image_url = 'missing.jpg';
					//echo "Return Code: " . $_FILES["user_image_url"]["error"] . "<br />";
    			}
			else {
				$image_url = uploadImage('user_image_url', 'signatures/');
			}
			
 			$sqlCheckForDuplicate = "SELECT user_name FROM users WHERE user_name = '". $username ."'";

 			if( mysql_num_rows( mysql_query( $sqlCheckForDuplicate ) ) == 0 ) // no duplicate username
 			{
				 $sqlRegUser = "INSERT INTO
				 users( user_name, user_password, user_email, user_role, user_image_url )
				 VALUES(
				 '". $username ."',
				 '". $password ."',
				 '". $email ."',
				 '". $role ."',
				 '". $image_url ."'
				 )";

				 if( !mysql_query( $sqlRegUser ) )
				 {
					 echo "You Could Not Register Because Of An Unexpected Error.";
				 }
				 else // return admin to profiles page
				 {
					//$_SESSION['signed_in'] = true; //set the $_SESSION['signed_in'] variable to TRUE
					//$_SESSION['user_id']    = mysql_insert_id();  // gets the newly created user_id
					//$_SESSION['user_name']  = $username;
					//$_SESSION['user_role'] = $role;
					// GOTO index
					 header ('location: profiles.php');
					 exit;
				 }
			 }
 			 else // duplicate username
			 {
 					echo "The Inspector Name You Have Chosen Is Already Being Used By Another User. Please Try Another One.";
			 }
		 }
	 }
else
{
	echo "You Could Not Be Registered Because Of Missing Data.";
}

 ?>
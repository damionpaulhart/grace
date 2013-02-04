<?
$title="Profile";
 require 'header.php';
 if(isset($user)){
 $result = mysql_query("SELECT user_id, user_name, user_password, user_email, user_image_url FROM users WHERE user_name = '$user'" ) or die(mysql_error());
 $row = mysql_fetch_array($result, MYSQL_ASSOC);
 }
?>

<div class="page-header">
				<h1>Your Profile</h1>
</div>
<form class="form-horizontal" id="register" name="register" method="post" action="profile-edit-check.php" enctype="multipart/form-data">
				<input type="hidden" name="user_id" id="user_id" value="<?php echo $row['user_id'] ?>"/>
				<input type="hidden" name="user_name" id="user_name" value="<?php echo $row['user_name'] ?>"/>
				<input type="hidden" name="old_image" id="old_image" value="<?php echo $row['user_image_url'] ?>"/>
				<table border="0" cellpadding="8">
								<tr>
												<td align="right"><label for="user_name">Registered Inspector</label>
																<input type="text" class="input" style="width:200px" name="user_name" id="user_name" disabled="disabled" <?php echo 'value="' . $row['user_name'] . '"'; ?>>
								</tr>
								<tr>
												<td align="right"><label for="user_name">Registered Inspector Number</label>
																<input type="text" class="input" style="width:200px" name="user_inspectorID"  id="user_inspectorID" <?php echo 'value="' . $row['user_inspectorID'] . '"'; ?>>
								</tr>
								<tr>
												<td align="right"><label for="user_password">Password</label>
																<input type="password" class="input" style="width:200px" name="user_password" id="user_password"  <?php echo 'value="' . $row['user_password'] . '"'; ?>>
								</tr>
								<tr>
												<td align="right"><label for="user_email">Email</label>
																<input type="text" class="input" style="width:200px" name="user_email" id="user_email"  <?php echo 'value="' . $row['user_email'] . '"'; ?>>
								</tr>
								<tr>
								<tr>
												<td>Signature Image: <img src="signatures/<?php echo $row['user_image_url'] ?>" /></td>
								</tr>
								<tr>
												<td align="left"><label for="user_image_url">Change Image:</label>
																<input name="user_image_url" type="file" id="user_image_url">
								</tr>
								<tr>
												<td colspan="3"><hr></td>
								</tr>
								<tr>
												<td colspan="3" align="center"><a href="index.php">Cancel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input name="submit" type="submit" value="Submit" ></td>
												<!-- form_name needed for form-save.php --> 
								</tr>
				</table>
</form>
<?php
 require 'footer.php';
?>
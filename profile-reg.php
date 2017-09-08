<?php
 $title="Add User";
 require_once 'header.php';
?>

<div class="page-header">
    <h1>Add New User</h1>
    </div>

      <form class="form-horizontal" id="register" name="register" method="post" action="profile-reg-check.php" enctype="multipart/form-data">
<table border="0" cellpadding="8"> 
<tr><td align="right"><label for="user_name">Username</label>
        <input type="text" class="input" style="width:200px" name="user_name" id="user_name">
<tr><td align="right"><label for="user_password">Password</label>
        <input type="password" class="input" style="width:200px" name="user_password" id="user_password">
<tr><td align="right"><label for="user_email">Email</label>
        <input type="text" class="input" style="width:200px" name="user_email" id="user_email">
<tr>
<tr><td align="left"><label for="user_image_url">Signature Image</label>
<input name="user_image_url" type="file" id="user_image_url">
<tr>
      <td colspan="3"><hr></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><a href="profiles.php">Cancel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="submit" type="submit" value="Submit" ></td> <!-- form_name needed for form-save.php -->
    </tr>
	</table>
  </form>
  
<?php
 require 'footer.php';
?>

<?php
session_start();
 if($_SESSION['user_role'] != 'admin') {
	header ('location: index.php');
	exit;
 }
 $title="Users";
 // did we just complete an edir or a delete?
$message = $_GET['message'];
 require_once 'header.php';
?>

<?php

 if($role == 'admin'){
 $query = mysql_query("SELECT user_id, user_name, user_email, user_image_url FROM users WHERE user_role ='user' ORDER BY user_name ASC") or die(mysql_error());
 }
?>
<div class="page-header">
    <h1>Inspectors</h1>
    </div>
	<!-- SHOW MESSAGES IF JUST EDITED -->
	<?php if ($message == 'edit') { ?>
		<div class="alert alert-success">
    		<a class="close" data-dismiss="alert">×</a>
    		<strong>Saved.</strong> The inspector profile is updated.
    	</div>
	<?php	} ?>
	<?php if ($message == 'delete') { ?>
		<div class="alert alert-success">
    		<a class="close" data-dismiss="alert">×</a>
    		<strong>DELETED.</strong> The inspector profile was deleted.
    	</div>
	<?php	} ?>
	
	<!-- USERS -->
	<p><a href="profile-reg.php">Add New Inspector</a></p>
<table  class="table table-bordered">
<thead>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Signature</th>
</thead>
<tbody>

 <?php
 
while($row = mysql_fetch_array($query, MYSQL_ASSOC))
  {
	  ?>
 <tr>
 <td><?php echo $row['user_inspectorID'] ?></td>
 <td><strong><?php echo $row['user_name'] ?></strong></td>
 <td><a href="mailto:<?php echo $row['user_email'] ?>"><?php echo $row['user_email'] ?></a></td>
 <td><img src="signatures/<?php echo $row['user_image_url'] ?>" /></td>
  <td><a href="profile-edit.php?id=<?php echo $row['user_id'] ?>">Edit</a></td>
  <td><a href="#" onclick="return deletechecked('<?php echo $row['user_name'] ?>', 'profile-delete.php?id=<?php echo $row['user_id'] ?>');">Delete</a></td>
 </tr>

 <?php
 }
 ?>
 </tbody>
 </table>
 
 <!-- ================================================== -->
 <script>
 function deletechecked(user, delUrl)
{
    var answer = confirm("Delete " + user + " ?")
    if (answer){
        document.location = delUrl;
    }
    
    return false;  
} 
 </script>
<?php
 require_once 'footer.php';
?>
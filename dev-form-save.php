<?php
// need a connection for mysql_real_escape_string to work.
$server = 'localhost';
$username   = 'damionha_form';
$password   = 'webpass';
mysql_connect($server, $username,  $password)
?>

<h1>Form Received</h1>
<h2>POST data</h2>
<p>This is just to review what was receieved.</p>
<p># of items: <?php echo count($_POST); ?>
<p>
  <textarea name="POST" cols="70" rows="20">
<?php
if ($_POST) {
    //echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    //echo '</pre>';
}
?>
  </textarea>
  
</p>
<h2>The Fields</h2>
<p>The names of the fields in the form.</p>
<p>  <textarea name="POST" cols="70" rows="5">
<?php
if ($_POST) {
    //echo '<pre>';
	foreach($_POST as $key=>$value)
{
  //echo "$key=$value";
  echo "$key,";
}

    //echo '</pre>';
}
?>
  </textarea></p>
  <h2>The Insert Values</h2>
  <p>This is for form-save using a break statement.</p>
<p>  <textarea name="POST" cols="70" rows="20">
<?php
if ($_POST) {
    //echo '<pre>';
	foreach($_POST as $key=>$value)
{
  echo "'\" . mysql_real_escape_string(\$_POST['$key']) . \"',\n";
   
}

    //echo '</pre>';
}
?>
  </textarea></p>
  
  <h2>SQL Table Creator</h2>
  <p>Copy into phpMyAdmin, add to create.sql</p>
<?php 
$newarray = $_POST;
unset($newarray['form_name']);
array_pop($newarray);
?>
<p>  <textarea name="POST" cols="70" rows="20">
CREATE TABLE IF NOT EXISTS `<?= $_POST['form_name']; ?>` (
  `entryID` int(8) NOT NULL auto_increment,
<?php
	foreach($newarray as $key=>$value)
{
  echo " `$key` text,\n";
}
?>
PRIMARY KEY  (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
  </textarea></p>
<p>&nbsp;</p>

  <h2>Test data INSERT Creator</h2>
<p>Adding test data to the form's table</p>
<p>  <textarea name="INSERT" cols="70" rows="20">

<?php
$formName = $_POST['form_name'];
// copy $_POST into a new array
$newarray = $_POST;
// Remove "form_name" and the key item
unset($newarray['form_name']);
// Remove last item
// could do ... unset($a[count($a)-1]);
array_pop($newarray);
$insert = sprintf('INSERT INTO %s (%s) VALUES ("%s")', $formName, implode(', ', array_map('mysql_real_escape_string', array_keys($newarray))), implode('", "', array_map('mysql_real_escape_string', $newarray)));

echo $insert;
?>
  </textarea></p>
<p>&nbsp;</p>

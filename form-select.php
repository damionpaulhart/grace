<?php
 require 'header.php';
 $form_num = $_GET['form_num'];
 
 $query = mysql_query("SELECT dateInspect, owner, ownerID, entryID, vin, inspector  FROM form$form_num" ) or die(mysql_error());
 $query_form = mysql_query("SELECT form_num, form_title FROM forms WHERE form_num = $form_num" ) or die(mysql_error());
?>
<!-- ================================================== -->
<div class="page-header">
    <h1><?=mysql_result($query_form, 0,1); ?></h1>
    </div>
	<p>Click a VIN to view the form.</p>
<table  class="table table-bordered">
<tr>
<th>OwnerID</th>
<th>Owner</th>
<th>TrailerVIN</th>
<th>Inspector</th>
<th>Date</th>
</tr>
<?
while($row = mysql_fetch_array($query, MYSQL_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row['ownerID'] . "</td>";
  echo "<td>" . $row['owner'] . "</td>";
  echo "<td><a href='form" . $form_num . ".php?entry=" . $row['entryID'] . "&action=view'>" . $row['vin'] . "</a></td>";
  echo "<td>" . $row['inspector'] . "</td>";
  echo "<td>" . $row['dateInspect'] . "</td>";
  echo "</tr>";
  }
?>

</table>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
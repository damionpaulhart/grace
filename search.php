<?php
$title="Search";
 require 'header.php';
 $searched_text = $_GET['q'];
 
/* 
    Search through all forms for results 
*/ 
function multisearch($searched_text) 
{
if ($searched_text == '') {
	$resultTable = '';
	}
else {
	
$resultTable = '';
	$forms_query = mysql_query("SELECT form_num, form_title FROM forms ORDER BY form_num ASC") or die(mysql_error());
	while($form_row = mysql_fetch_array($forms_query, MYSQL_ASSOC))
  {
	  $tableHeader = "<h3>" . $form_row['form_title'] . "</h3>";
	  $form_current = "form" . $form_row['form_num'];
	
	$query = mysql_query("SELECT
							 entryID,
							 owner,
							 ownerID,
							 woID,
							 dateInspect,
							 inspector,
							 inspectorID,
							 vin
						FROM
							$form_current
						WHERE
							owner
						LIKE
							'%$searched_text%'
						OR
							ownerID
						LIKE
							'%$searched_text%'
						OR
							inspector
						LIKE
							'%$searched_text%'
						OR
							woID
						LIKE
							'%$searched_text%'
						OR
							dateInspect
						LIKE
							'%$searched_text%'
						ORDER BY
							owner
						ASC") or die(mysql_error());

	if (mysql_num_rows($query) < 1) {
		//$resultTable .= "no result";
	}
	else {
		$resultTable .= $tableHeader;
	$resultTable .= <<<EOD
	
	<table class="table table-striped table-bordered table-condensed">
<thead>
<th>Owner</th>
<th>Inspected</th>
<th>Trailer</th>
</thead>
<tbody>
EOD;

while($row = mysql_fetch_array($query, MYSQL_ASSOC))
  {
 $resultTable .= "<tr>";
 $resultTable .= "<td><strong>" . $row['owner'] . "</strong><br />". $row['ownerID'] . "</td>";
 $resultTable .= "<td>" . $row['inspector'] . "<br />" . $row['dateInspect'] . "</td>";
 $resultTable .= "<td><a href='" . $form_current . ".php?entry=" . $row['entryID'] . "&action=view'>" . $row['vin'] . "</a></td>";
 $resultTable .= "</tr>";
 }
 
$resultTable .= <<<EOD
 </tbody>
 </table>
EOD;
	}
  }
 
}
	return $resultTable; 
}

 
 
?>
<div class="page-header">
<?php 

if ($searched_text != '') {
	echo '<h1>Search Results for \'' . $searched_text . '\'</h1>';
}
else {
	echo '<h1>Enter Search:</h1>';
}
?>

</div>
<div class="row">
<form class="well form-search span7" action="search.php">
  <input type="text" class="input-medium search-query" placeholder="<? echo $searched_text; ?>"  name="q" id="q" value="<? echo $searched_text; ?>">
  <button type="submit" class="btn">Search</button>
</form>
</div>

<div class="row">
<div class="span8">
<?php echo multisearch($searched_text); ?>
      </div>
      </div>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
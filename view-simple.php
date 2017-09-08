<?php
require_once 'auth.php';

$query="SELECT * FROM form01 LIMIT 1";
$result=mysql_query($query);
$fields_num = mysql_num_fields($result);
	$cell = mysql_fetch_array($result, MYSQL_NUM);
echo "<h1>Table: {$table}</h1>";
echo "<table border='1'>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
	echo "<tr>";
    $field = mysql_fetch_field($result, $i);

	echo "<td>" . $i . "</td>";
    echo "<td>" . $field->name . "</td>";
	echo "<td>" . $cell[$i] . "</td>";
	echo "</tr>\n";
}
mysql_free_result($result);
mysql_close();
?>
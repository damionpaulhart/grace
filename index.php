<?
$title="Grace Trailer Service";
 require 'header.php';
 $result = mysql_query("SELECT * FROM forms WHERE form_ready = 1" ) or die(mysql_error());
?>

<div class="page-header">
    <h1> Choose  action...</h1>
    </div>
        <div class="span12">
            <table  class="table table-bordered">
    <thead>
    <tr>
    <th>New</th>
    <th>View</th>
    <th>#</th>
    <th>Form</th>
    </tr>
    </thead>
    <tbody>
<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
  echo '<tr>';
  echo '<td><a href="form' . $row['form_num'] . '.php"> New </a></td>';
  echo '<td><a href="form-select.php?form_num=' . $row['form_num'] . '"> View </a></td>';
  echo '<td>' . $row['form_num'] . '</td>';
  echo '<td>' . $row['form_title'] . '</td>';
  echo '</tr>';
  }
?>
    </tbody>
    </table>

<!-- ================================================== -->
<?php
 require 'footer.php';
?>

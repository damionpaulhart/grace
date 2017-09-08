<?php

	if($formViewer) {
		$query_image = mysql_query('SELECT user_image_url, user_name FROM users WHERE user_name = "' . $row['inspector'] . '"') or die(mysql_error());
		$signature_image_url = mysql_result($query_image, 0,0);
		$signature_inspector = $row['inspector'];
	}
	else {
		$signature_image_url = $user_image_url;
		$signature_inspector = $user;
	}
?>

<tr style="page-break-before:always">
    <td colspan="3" ><hr>
    </td>
  </tr>
  <tr>
  <td align="left" colspan="3"><img src="signatures/<?php echo $signature_image_url; ?>" /></td></tr>
<tr>
  <td align="right">
  <label>Reg. Inspector</label>
    <input type="text" name="inspector" id="inspector"  size="20" value="<?php echo $signature_inspector; ?>"></td>
    <td align="right"><label> Reg. No.</label>
      <input name="inspectorID" type="text" id="inspectorID" size="20" <?php if($formViewer) { echo 'value="' . $row['inspectorID'] . '"';} ?>></td>
    <td align="right"><label>Date</label><input type="text" name="dateInspector" id="dateInspector" <?php if($formViewer) { echo 'value="' . $row['dateInspector'] . '"';} ?>></td>
  </tr>
  <tr><td align="right" colspan="2">
  <label>Cargo Tank Owner Acceptance:</label><input name="ownerSign" type="text" id="ownerSign" disabled class="disabled" style="width:300px">
  </td>
  <td align="right">
  <label>Date:</label><input type="text" name="dateOwner" id="dateOwner" disabled class="disabled">
  </td></tr>
	<?php if(!$formViewer) { ?>
    <tr>
      <td colspan="3"><hr></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><a href="index.php">Cancel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="submit" type="submit" value="Submit" ></td> <!-- form_name needed for form-save.php -->
    </tr>
    <?php } ?>
  
</table>
</form>
</div>
<?php if($formViewer) { ?>
	<p> <a id="returnhome" href="index.php">Return Home</a></p>
<?php } ?>
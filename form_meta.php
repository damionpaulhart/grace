<!- META --------------------------------------------------------------------->
    <tr>
      <td colspan="3" align="right"><label>Date</label>
        <input type="text" name="dateInspect" id="dateInspect" <?php if($formViewer) { echo 'value="' . $row['dateInspect'] . '"';} ?>></td>
    </tr>  
    <tr>
      <td align="right"><label>Owner</label>
        <input name="owner" type="text" id="owner" <?php if($formViewer) { echo 'value="' . $row['owner'] . '"';} ?>></td>
      <td align="right"><label>Owner I.D.</label>
        <input name="ownerID" type="text" id="ownerID" <?php if($formViewer) { echo 'value="' . $row['ownerID'] . '"';} ?>></td>
      <td align="right"><label>Work Order No.</label>
        <input name="woID" type="text" id="woID" <?php if($formViewer) { echo 'value="' . $row['woID'] . '"';} ?>></td>
    </tr>
    <tr>
      <td align="right"><label>Manufacturer</label>
        <input name="mfg" type="text" id="mfg" <?php if($formViewer) { echo 'value="' . $row['mfg'] . '"';} ?>></td>
      <td align="right"><label>Serial No.</label>
        <input name="vin" type="text" id="vin" <?php if($formViewer) { echo 'value="' . $row['vin'] . '"';} ?>></td>
      <td align="right"><label>Year </label>
        <input name="datemfg" type="text" id="datemfg" <?php if($formViewer) { echo 'value="' . $row['datemfg'] . '"';} ?>></td>
    </tr>
    <tr>
      <td align="right" colspan="3"><label>MC/DOT No.</label>
        <select name="dotspec" id="dotspec">
          <option value="DOT406" <?php if($formViewer) { if ($row['dotspec']=="DOT406") {echo 'selected';};}; ?>>DOT406</option>
          <option value="DOT407" <?php if($formViewer) {  if ($row['dotspec']=="DOT407") {echo 'selected';};}; ?>>DOT407</option>
          <option value="DOT412" <?php if($formViewer) {  if ($row['dotspec']=="DOT412") {echo 'selected';};}; ?>>DOT412</option>
          <option value="MC306" <?php if($formViewer) { if ($row['dotspec']=="MC306") {echo 'selected';};}; ?>>MC306</option>
          <option value="MC307" <?php if($formViewer) { if ($row['dotspec']=="MC307") {echo 'selected';};}; ?>>MC307</option>
          <option value="MC312" <?php if($formViewer) { if ($row['dotspec']=="MC312") {echo 'selected';};}; ?>>MC312</option>
          <option value="MC330" <?php if($formViewer) { if ($row['dotspec']=="MC330") {echo 'selected';};}; ?>>MC330/331</option>
        </select></td>
    </tr>

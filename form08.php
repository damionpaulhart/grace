<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
    <td colspan="3" class="center"><h2>THICKNESS TEST REPORT</h2></td>
    </tr>
    
  <tr>
    <td colspan="3" class="center">In Accordance with 49 CFR Part 180.407(l) and 180.417)</td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
  <!- ROW1 --------------------------------------------------------------------->
  <tr>
    <td align="right">Manufactured Thickness:</td>
      <td colspan="2"><table width="100%" border="0">
          <tr>
            <td>Heads</td>
            <td>Shell:Top</td>
            <td>Shell:Sides</td>
            <td>Shell:Bottom</td>
          </tr>
          <tr>
            <td><input name="thickManuHead" type="text" id="thickManuHead" class="small" <?php if($formViewer) { echo 'value="' . $row['thickManuHead'] . '"';} ?>></td>
            <td><input name="thickManuTop" type="text" id="thickManuTop" class="small" <?php if($formViewer) { echo 'value="' . $row['thickManuTop'] . '"';} ?>></td>
            <td><input name="thickManuSide" type="text" id="thickManuSide" class="small" <?php if($formViewer) { echo 'value="' . $row['thickManuSide'] . '"';} ?>></td>
            <td><input name="thickManuBottom" type="text" id="thickManuBottom" class="small" <?php if($formViewer) { echo 'value="' . $row['thickManuBottom'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
  <!- ROW2 --------------------------------------------------------------------->
  <tr>
      <td align="right">Thickness at which test becomes an annual requirement:</td>
      <td colspan="2"><table width="100%" border="0">
          <tr>
            <td>Heads</td>
            <td>Shell:Top</td>
            <td>Shell:Sides</td>
            <td>Shell:Bottom</td>
          </tr>
          <tr>
            <td><input name="thickAnnualHead" type="text" id="thickAnnualHead" class="small" <?php if($formViewer) { echo 'value="' . $row['thickAnnualHead'] . '"';} ?>></td>
            <td><input name="thickAnnualTop" type="text" id="thickAnnualTop" class="small" <?php if($formViewer) { echo 'value="' . $row['thickAnnualTop'] . '"';} ?>></td>
            <td><input name="thickAnnualSide" type="text" id="thickAnnualSide" class="small" <?php if($formViewer) { echo 'value="' . $row['thickAnnualSide'] . '"';} ?>></td>
            <td><input name="thickAnnualBottom" type="text" id="thickAnnualBottom" class="small" <?php if($formViewer) { echo 'value="' . $row['thickAnnualBottom'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
  <!- ROW3 --------------------------------------------------------------------->
  <tr>
    <td align="right">Minimum Thickness:</td>
      <td colspan="2"><table width="100%" border="0">
          <tr>
            <td>Heads</td>
            <td>Shell:Top</td>
            <td>Shell:Sides</td>
            <td>Shell:Bottom</td>
          </tr>
          <tr>
            <td><input name="thickMinHead" type="text" id="thickMinHead" class="small" <?php if($formViewer) { echo 'value="' . $row['thickMinHead'] . '"';} ?>></td>
            <td><input name="thickMinTop" type="text" id="thickMinTop" class="small" <?php if($formViewer) { echo 'value="' . $row['thickMinTop'] . '"';} ?>></td>
            <td><input name="thickMinSide" type="text" id="thickMinSide" class="small" <?php if($formViewer) { echo 'value="' . $row['thickMinSide'] . '"';} ?>></td>
            <td><input name="thickMinBottom" type="text" id="thickMinBottom" class="small" <?php if($formViewer) { echo 'value="' . $row['thickMinBottom'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
  <!- ROW4 --------------------------------------------------------------------->
  <!- ROW5 --------------------------------------------------------------------->
  <tr>
      <td colspan="2">Cargo Tank is Insulated
        <label>
          <input type="radio" name="RadioGroupInsulated" value="yes"  id="RadioGroupInsulated_0" <?php if($formViewer) { if ($row['RadioGroupInsulated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupInsulated" value="no"  id="RadioGroupInsulated_1" <?php if($formViewer) { if ($row['RadioGroupInsulated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
      <td>Cargo Tank is Lined
        <label>
          <input type="radio" name="RadioGroupLined" value="yes"  id="RadioGroupLined_0" <?php if($formViewer) { if ($row['RadioGroupLined']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupLined" value="no"  id="RadioGroupLined_1" <?php if($formViewer) { if ($row['RadioGroupLined']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW6 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Cargo Tank is Used in Special or Dedicated Service
        <label>
          <input type="radio" name="RadioGroupDedicated" value="yes"  id="RadioGroupDedicated_0" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupDedicated" value="no"  id="RadioGroupDedicated_1" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW7 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Cargo tank used to haul product corrosive to tank
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="yes"  id="RadioGroupCorrosive_0" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="no"  id="RadioGroupCorrosive_1" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW8 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>Number of Compartments</label>
        <input type="text" name="numbercompartments" id="numbercompartments" <?php if($formViewer) { echo 'value="' . $row['numbercompartments'] . '"';} ?>></td>
      <td align="right"><label>Total Capacity</label>
        <input type="text" name="totalcapacity" id="totalcapacity" <?php if($formViewer) { echo 'value="' . $row['totalcapacity'] . '"';} ?>></td>
    </tr>
  <!- ROW9 --------------------------------------------------------------------->
  
<tr><td colspan="3"><h3>Procedure:</h3><ol>
				<li>Calibrate the Ultrasonic Thickness Tester.</li>
				<li>Starting with teh front head at the 12 o'clock position, tank eight readings in the clockwise rotation, on the knuckle radius of the head. Enter the readings on the grid below.</li>
				<li>Move back, and again facing forward, starting at the 12 o'clock position, take eight readings on the shell, adjacent to the head to shell weld, in a clockwise rotation. Enter the readings on the grid.</li>
				<li>Move back to the shell areas adjacent to the #1 ring. Face forward, starting at the 12 o'clock position, take eight readings in a clockwise rotation. Take the other readings at 2, 4, 8, and 10 o'clock adjacent to any logitudinal welds. Enter the readings on the grid and lable the grid &quot;No. 1 RING&quot;.</li>
				<li>Continue moving to the rear of the tank, taking measurements adjacent to each ring and girth seam(s), starting at 12 o'clock, in a clockwise roation. Label each grid for what you are measuring.</li>
				<li>The rear head will be the last entry on the grid. Take eight readings staring at the 12 o'clock position, but this time move in a COUNTER CLOCKWISE rotation.</li>
</ol></td>
</tr>
  <!- ROW10 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Were repairs made by welding
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes"  id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no"  id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW11 --------------------------------------------------------------------->
  <tr>
      <td colspan="2"><label>National Board "R" Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td><label>ASME "U" Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>
  <!- ROW12 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Was the affected compartment pressure tested?
        <label>
          <input type="radio" name="RadioGroupPressure" value="yes"  id="RadioGroupPressure_0" <?php if($formViewer) { if ($row['RadioGroupPressure']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupPressure" value="no"  id="RadioGroupPressure_1" <?php if($formViewer) { if ($row['RadioGroupPressure']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW13 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requiremets of the DOT specification identified in this report </td>
    </tr>
  <!- ROW14 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
  <!- ROW15 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'T' </td>
    </tr>
  <!- ROW16 --------------------------------------------------------------------->
  <tr><td colspan="3" style="background-color:#FFFFCC; color:white;">16</td></tr>
  <!- ROW17 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><p>Corrective Action for Non-Acceptable Conditions: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
    </tr>
<!-- /.FORM ================================================== -->
<?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
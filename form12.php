<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
    <td colspan="3" class="center"><h2>LINING INSPECTION</h2></td>
    </tr>
    
  <tr>
    <td colspan="3" class="center">In Accordance with 49CFR Part 180 Para. 180.407[f] and 180.417</td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
  <!- ROW1 --------------------------------------------------------------------->
  <tr>
      <td>Minimum Thickness:</td>
      <td align="right"><label>Heads</label>
        <input type="text" name="head" id="head" <?php if($formViewer) { echo 'value="' . $row['head'] . '"';} ?>></td>
      <td align="right"><label>Shell</label>
        <input type="text" name="shell" id="shell" <?php if($formViewer) { echo 'value="' . $row['shell'] . '"';} ?>></td>
    </tr>
  <!- ROW2 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="3"><label>MAWP</label>
        <input name="mawp" type="text" id="mawp" <?php if($formViewer) { echo 'value="' . $row['mawp'] . '"';} ?>></td>
  </tr>
  <!- ROW3 --------------------------------------------------------------------->
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
  <!- ROW4 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Cargo Tank is Used in Special or Dedicated Service
        <label>
          <input type="radio" name="RadioGroupDedicated" value="yes"  id="RadioGroupDedicated_0" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupDedicated" value="no"  id="RadioGroupDedicated_1" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW5 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Cargo tank used to haul product corrosive to tank
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="yes"  id="RadioGroupCorrosive_0" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="no"  id="RadioGroupCorrosive_1" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW6 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">
      	<table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td>&nbsp;</td>
            <td>Acceptable</td>
            <td nowrap="nowrap">Non-acceptable<br />See Remarks</td>
          </tr>
          <tr>
            <td>Calibrate high frequency spark tester in accordance with 180.407(f)</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Visually inspect lining for potential defects such as cracks, distorition, deterioration, discoloration. Bubbles, blisters, and seperation. At areas around sumps and drains, also look for liner termination. Mark all defects with chalks</td>
            <td><input type="radio" name="radio2" id="1" value="1" <?php if($formViewer) { if ($row['radio2']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="2" value="2" <?php if($formViewer) { if ($row['radio2']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Sweep liner (4" or 8" brush) using a constant uninterrupted motion, working from front to rear of tank</td>
            <td><input type="radio" name="radio3" id="1" value="1" <?php if($formViewer) { if ($row['radio3']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="2" value="2" <?php if($formViewer) { if ($row['radio3']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Sweep entire head area, particularly area of the knuckle</td>
            <td><input type="radio" name="radio4" id="1" value="1" <?php if($formViewer) { if ($row['radio4']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio4" id="2" value="2" <?php if($formViewer) { if ($row['radio4']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Slowly sweep chalked areas or previously repaired areas</td>
            <td><input type="radio" name="radio5" id="1" value="1" <?php if($formViewer) { if ($row['radio5']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio5" id="2" value="2" <?php if($formViewer) { if ($row['radio5']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>On defective areas, remove lining material and inspect shell or head for corrosion or deterioration. Thickness test if necessary</td>
            <td><input type="radio" name="radio6" id="1" value="1" <?php if($formViewer) { if ($row['radio6']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio6" id="2" value="2" <?php if($formViewer) { if ($row['radio6']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Re-inspect and retest replaced lining section</td>
            <td><input type="radio" name="radio7" id="1" value="1" <?php if($formViewer) { if ($row['radio7']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio7" id="2" value="2" <?php if($formViewer) { if ($row['radio7']=='2') {echo 'checked';};}; ?>></td>
          </tr>
        </table></td>
    </tr>
  <!- ROW7 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><p>Remarks: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
    </tr>
  <!- ROW8 --------------------------------------------------------------------->
  <tr><td colspan="3" style="background-color:#FFFFCC; color:white;">8</td></tr>
  <!- ROW9 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Were repairs made by welding
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes"  id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no"  id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW10 --------------------------------------------------------------------->
  <tr>
      <td colspan="2"><label>National Board "R" Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td><label>ASME "U" Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>
  <!- ROW11 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requiremets of the DOT specification identified in this report </td>
    </tr>
  <!- ROW12 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
  <!- ROW13 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'L' </td>
    </tr>

<!-- /.FORM ================================================== -->
<?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
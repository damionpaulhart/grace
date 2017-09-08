<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
      <td colspan="3" class="center"><h2>LEAKAGE TEST REPORT</h2></td>
    </tr>
    <tr>
      <td colspan="3" class="center">In Accordance with 49 CFT Part 180 Para. 180.407[h] and 180.417)</td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
    <!- ROW1 --------------------------------------------------------------------->
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
    <!- ROW2 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Cargo Tank is Used in Special or Dedicated Service
        <label>
          <input type="radio" name="RadioGroupDedicated" value="yes"  id="RadioGroupDedicated_0" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupDedicated" value="no"  id="RadioGroupDedicated_1" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW3 --------------------------------------------------------------------->
    <tr>
      <td><label>MAWP</label>
        <input class="small" name="mawp" type="text" id="mawp" <?php if($formViewer) { echo 'value="' . $row['mawp'] . '"';} ?>></td>
      <td colspan="2"><label>Leakage Test Pressure</label>
        <input class="small" name="testpressure" type="text" id="testpressure" <?php if($formViewer) { echo 'value="' . $row['testpressure'] . '"';} ?>></td>
    </tr><tr>
      <td colspan="3"><label>Fluid Used in Hydrostatic Method</label>
        <input name="fluid" type="text" id="fluid" <?php if($formViewer) { echo 'value="' . $row['fluid'] . '"';} ?>></td>
    </tr>
    <!- ROW4 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><strong>Capacity by Compartment</strong>
        <table width="100%" border="0">
          <tr>
            <td>Comp#1</td>
            <td>Comp#2</td>
            <td>Comp#3</td>
            <td>Comp#4</td>
            <td>Comp#5</td>
            <td>Comp#6</td>
          </tr>
          <tr>
            <td><input name="comp1cap" type="text" id="comp1cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1cap'] . '"';} ?>></td>
            <td><input name="comp2cap" type="text" id="comp2cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2cap'] . '"';} ?>></td>
            <td><input name="comp3cap" type="text" id="comp3cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3cap'] . '"';} ?>></td>
            <td><input name="comp4cap" type="text" id="comp4cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4cap'] . '"';} ?>></td>
            <td><input name="comp5cap" type="text" id="comp5cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5cap'] . '"';} ?>></td>
            <td><input name="comp6cap" type="text" id="comp6cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp6cap'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW5 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">
      	<p>The following must be completed for each compartment. Red flag all vents removed or rendered inoperative. Replace vents after completing test.</p>
      	<table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td></td>
            <td>Acceptable</td>
            <td nowrap="nowrap">Non-acceptable<br />(See Remarks)</td>
          </tr>
          <tr>
            <td>Install test fitting into manhole assembly, clean out, or any other top opening. With manhole cover and internal valve in the closed position, and discharge valve open, gradually pressurize cargo tank to 80% of MAWP. Hold for appropriate amount of time to ensure zero leakage from manhole cover, internal valve seat, etc.</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Close discharge valve and open internal valve. Stabilize internal pressure at 80% of MAWP (required leakage test pressure). Hold at zero pressure drop for 5 minutes.</td>
            <td><input type="radio" name="radio2" id="1" value="1" <?php if($formViewer) { if ($row['radio2']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="2" value="2" <?php if($formViewer) { if ($row['radio2']=='2') {echo 'checked';};}; ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW6 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><p>Remarks: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
    </tr>
    <!- ROW7 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Were repairs made by welding
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes"  id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no"  id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW8 --------------------------------------------------------------------->
    <tr>
      <td colspan="2"><label>National Board "R" Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td><label>ASME "U" Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>
    <!- ROW9 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Was the affected compartment pressure tested?
        <label>
          <input type="radio" name="RadioGroupPressure" value="yes"  id="RadioGroupPressure_0" <?php if($formViewer) { if ($row['RadioGroupPressure']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupPressure" value="no"  id="RadioGroupPressure_1" <?php if($formViewer) { if ($row['RadioGroupPressure']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW10 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requiremets of the DOT specification identified in this report </td>
    </tr>
    <!- ROW11 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
    <!- ROW12 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'K' </td>
    </tr>
    
    <!-- /.FORM ================================================== -->
    <?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
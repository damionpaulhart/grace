<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
    <td colspan="3" class="center"><h2>PRESSURE RETEST - PNEUMATIC METHOD</h2></td>
    </tr>
    
  <tr>
    <td colspan="3" class="center">In Accordance with DOT 49CFR Part 180 Para. 180.407[g] and 180.417)</td>
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
      <td colspan="3">Cargo tank used to haul product corrosive to tank
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="yes"  id="RadioGroupCorrosive_0" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="no"  id="RadioGroupCorrosive_1" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='no') {echo 'checked';};}; ?>>
          No</label></td>
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
      <td><label>Heat Panels Tested</label>
        <label>
          <input type="radio" name="RadioGroupHeat" value="yes"  id="RadioGroupHeat_0" <?php if($formViewer) { if ($row['RadioGroupHeat']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupHeat" value="no"  id="RadioGroupHeat_1" <?php if($formViewer) { if ($row['RadioGroupHeat']=='no') {echo 'checked';};}; ?>>
          No</label>
      </td>
      <td colspan="2"><label>Leakage Test Pressure</label>
        <input class="small" name="testpressure" type="text" id="testpressure" <?php if($formViewer) { echo 'value="' . $row['testpressure'] . '"';} ?>></td>
    </tr><tr>
      <td colspan="3"><label>Fluid Used in Hydrostatic Method</label>
        <input name="fluid" type="text" id="fluid" <?php if($formViewer) { echo 'value="' . $row['fluid'] . '"';} ?>></td>
    </tr>
  <!- ROW6 --------------------------------------------------------------------->
  <tr><td colspan="3" style="background-color:#FFFFCC; color:white;">6</td></tr>
  <!- ROW7 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Normal Vents Tested
        <label>
          <input type="radio" name="RadioGroupVent" value="1"  id="RadioGroupVent_0" <?php if($formViewer) { if ($row['RadioGroupVent']=='1') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupVent" value="2"  id="RadioGroupVent_1" <?php if($formViewer) { if ($row['RadioGroupVent']=='2') {echo 'checked';};}; ?>>
          No</label>
          <label>
          <input type="radio" name="RadioGroupVent" value="3"  id="RadioGroupVent_1" <?php if($formViewer) { if ($row['RadioGroupVent']=='3') {echo 'checked';};}; ?>>
          Replaced</label></td>
    </tr>
  <!- ROW8 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">
      	<p>======</p>
      	<table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
          </tr>
          <tr>
            <td colspan="5" align="left">--------</td>
          </tr>
          <tr>
            <td>------------</td>
            <td nobreak>-------------</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
          </tr>
        </table></td>
    </tr>
  <!- ROW9 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><p>Remarks: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
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
      <td colspan="3">Was the affected compartment pressure tested?
        <label>
          <input type="radio" name="RadioGroupPressure" value="yes"  id="RadioGroupPressure_0" <?php if($formViewer) { if ($row['RadioGroupPressure']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupPressure" value="no"  id="RadioGroupPressure_1" <?php if($formViewer) { if ($row['RadioGroupPressure']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW12 --------------------------------------------------------------------->
  <tr>
      <td colspan="2"><label>National Board "R" Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td><label>ASME "U" Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>
  <!- ROW13 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requirements of the DOT specification identified in this report </td>
    </tr>
  <!- ROW14 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
  <!- ROW15 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'P' </td>
    </tr>

<!-- /.FORM ================================================== -->
<?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
      <td colspan="3" class="center"><h2>INTERNAL VISUAL INSPECTION REPORT</h2></td>
    </tr>
    <tr>
      <td colspan="3" class="center">In Accordance with 49 CFR Part 180 Para. 180.407(e) and 180.417)</td>
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
    <!- ROW3 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Cargo Tank is Used in Special or Dedicated Service
        <label>
          <input type="radio" name="RadioGroupDedicated" value="yes"  id="RadioGroupDedicated_0" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupDedicated" value="no"  id="RadioGroupDedicated_1" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW4 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Cargo tank used to haul product corrosive to tank
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="yes"  id="RadioGroupCorrosive_0" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="no"  id="RadioGroupCorrosive_1" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW5 --------------------------------------------------------------------->
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
    <!- ROW6 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">
      	<table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td></td>
            <td>Acceptable</td>
            <td nowrap="nowrap">Non-Acceptable<br />(See Remarks)</td>
          </tr>
          <tr>
            <td>Inspect entire surface for corrosion, abrasion, dents, pitting or distortion (spectial attention to tank heads and shell area covered by the upper coupler).</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Inspect gauging devices for vertical alighnment and tightness</td>
            <td><input type="radio" name="radio2" id="1" value="1" <?php if($formViewer) { if ($row['radio2']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="2" value="2" <?php if($formViewer) { if ($row['radio2']=='2') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>Inspect areas around piping, sumps, and valves for foreign material that could prevent proper functioning</td>
            <td><input type="radio" name="radio3" id="1" value="1" <?php if($formViewer) { if ($row['radio3']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="2" value="2" <?php if($formViewer) { if ($row['radio3']=='2') {echo 'checked';};}; ?>></td>
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
    <tr>
      <td colspan="3">Thickness testing performed on corroded or abraded areas
        <label>
          <input type="radio" name="RadioGroupThickCorrode" value="yes"  id="RadioGroupThickCorrode_0" <?php if($formViewer) { if ($row['RadioGroupThickCorrode']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupThickCorrode" value="no"  id="RadioGroupThickCorrode_1" <?php if($formViewer) { if ($row['RadioGroupThickCorrode']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW9 --------------------------------------------------------------------->
    <tr>
      <td colspan="3" align="right">Is a sketch included to show areas(s)
        <label>
          <input type="radio" name="RadioGroupSketch" value="yes"  id="RadioGroupSketch_0" <?php if($formViewer) { if ($row['RadioGroupSketch']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupSketch" value="no" id="RadioGroupSketch_1" <?php if($formViewer) { if ($row['RadioGroupSketch']=='no') {echo 'checked';};}; ?>>
          No</label></td>
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
      <td colspan="3" align="right">Is a sketch included to show area(s)
        <label>
          <input type="radio" name="RadioGroupSketchWeld" value="yes"  id="RadioGroupSketchWeld_0" <?php if($formViewer) { if ($row['RadioGroupSketchWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupSketchWeld" value="no"  id="RadioGroupSketchWeld_1" <?php if($formViewer) { if ($row['RadioGroupSketchWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW13 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Was the affected compartment pressure tested?
        <label>
          <input type="radio" name="RadioGroupPressure" value="yes"  id="RadioGroupPressure_0" <?php if($formViewer) { if ($row['RadioGroupPressure']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupPressure" value="no"  id="RadioGroupPressure_1" <?php if($formViewer) { if ($row['RadioGroupPressure']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW14 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requiremets of the DOT specification identified in this report </td>
    </tr>
    <!- ROW15 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
    <!- ROW16 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'I' </td>
    </tr>    
    <!-- /.FORM ================================================== -->
    <?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
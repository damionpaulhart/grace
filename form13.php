<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
    <td colspan="3" class="center"><h2>MC 330/ MC331 HYDROSTATIC PRESSURE RETEST</h2></td>
    </tr>
  <tr>
    <td colspan="3" class="center">In Accordance with DOT 49CFR Part 180 Para. 180.407[g] and 180.417</td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
    <tr>
      <td align="right" colspan="3"><label>National Bd. Serial No.</label>
        <input type="text" name="nationalSerial" id="nationalSerial" <?php if($formViewer) { echo 'value="' . $row['nationalSerial'] . '"';} ?>>
      </td>
    </tr>
  <!- ROW1 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>MC 330</label>
        <input type="text" name="mc330" id="mc330" <?php if($formViewer) { echo 'value="' . $row['mc330'] . '"';} ?>> gallons</td>
      <td align="right"><label>MC331</label>
        <input type="text" name="mc331" id="mc331" <?php if($formViewer) { echo 'value="' . $row['mc331'] . '"';} ?>> gallons</td>
    </tr>
  <!- ROW2 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Magnetic Particle Inspection Performed
        <label>
          <input type="radio" name="RadioGroupQT" value="yes"  id="RadioGroupQT_0" <?php if($formViewer) { if ($row['RadioGroupQT']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupQT" value="no"  id="RadioGroupQT_1" <?php if($formViewer) { if ($row['RadioGroupQT']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW3 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><label>Vessel Material</label>
        <input type="text" name="material" id="material" <?php if($formViewer) { echo 'value="' . $row['material'] . '"';} ?>>
        <label>
          <input type="radio" name="RadioGroupMag" value="yes"  id="RadioGroupMag_0" <?php if($formViewer) { if ($row['RadioGroupMag']=='yes') {echo 'checked';};}; ?>>
          QT</label>
        <label>
          <input type="radio" name="RadioGroupMag" value="no"  id="RadioGroupMag_1" <?php if($formViewer) { if ($row['RadioGroupMag']=='no') {echo 'checked';};}; ?>>
          NQT</label></td>
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
  <tr><td colspan="3"><strong>Note:</strong> Upper coupler must be removed for inspection of the covered area of the shell and the backside of the Upper coupler</td></tr>
  <!- ROW9 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Cargo tank was stress relieved after fabrication
        <label>
          <input type="radio" name="RadioGroupStressRelieved" value="yes"  id="RadioGroupStressRelieved_0" <?php if($formViewer) { if ($row['RadioGroupStressRelieved']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupStressRelieved" value="no"  id="RadioGroupStressRelieved_1" <?php if($formViewer) { if ($row['RadioGroupStressRelieved']=='no') {echo 'checked';};}; ?>>
          No</label></td>
   </tr>
  <!- ROW10 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>Cargo Tank MAWP</label>
        <input type="text" name="mawp" id="mawp" <?php if($formViewer) { echo 'value="' . $row['mawp'] . '"';} ?>> PSI</td>
      <td align="right"><label>Test Pressure Applied</label>
        <input type="text" name="testpressure" id="testpressure" <?php if($formViewer) { echo 'value="' . $row['testpressure'] . '"';} ?>> PSI</td>
    </tr>
  <!- ROW11 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>Gauge Identified No.</label>
        <input type="text" name="gaugeNum" id="gaugeNum" <?php if($formViewer) { echo 'value="' . $row['gaugeNum'] . '"';} ?>></td>
      <td align="right"><label>Calibration Due Date</label>
        <input type="text" name="calibrationDate" id="calibrationDate" <?php if($formViewer) { echo 'value="' . $row['calibrationDate'] . '"';} ?>> PSI</td>
    </tr>
  <!- ROW12 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>Tester Name</label>
        <input type="text" name="testerName" id="testerName" <?php if($formViewer) { echo 'value="' . $row['testerName'] . '"';} ?>></td>
      <td align="right"><label>Test Date</label>
        <input type="text" name="testDate" id="testDate" <?php if($formViewer) { echo 'value="' . $row['testDate'] . '"';} ?>> PSI</td>
    </tr>
  <!- ROW13 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Defect were found and corrected by welding
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes"  id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no"  id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW14 --------------------------------------------------------------------->
  <tr>
      <td colspan="3" align="right">Sketch enclosed
        <label>
          <input type="radio" name="RadioGroupSketchWeld" value="yes"  id="RadioGroupSketchWeld_0" <?php if($formViewer) { if ($row['RadioGroupSketchWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupSketchWeld" value="no"  id="RadioGroupSketchWeld_1" <?php if($formViewer) { if ($row['RadioGroupSketchWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW15 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Repaired area was PWHT
        <label>
          <input type="radio" name="RadioGroupPWHT" value="yes"  id="RadioGroupPWHT_0" <?php if($formViewer) { if ($row['RadioGroupPWHT']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupPWHT" value="no"  id="RadioGroupPWHT_1" <?php if($formViewer) { if ($row['RadioGroupPWHT']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW16 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Repaired area was RT Examined
        <label>
          <input type="radio" name="RadioGroupRT" value="yes"  id="RadioGroupRT_0" <?php if($formViewer) { if ($row['RadioGroupRT']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupRT" value="no"  id="RadioGroupRT_1" <?php if($formViewer) { if ($row['RadioGroupRT']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW17 --------------------------------------------------------------------->
  <tr>
      <td colspan="2"><label>National Board "R" Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td><label>ASME "U" Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>
  <!- ROW18 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">
      <h3>Pressure Relief Valve Test</h3>
      <table width="100%" border="0">
          <tr>
            <td>&nbsp;</td>
            <td>Test#1</td>
            <td>Test#2</td>
          </tr>
          <tr>
            <td>Design PSI</td>
            <td><input name="PSIdesign1" type="text" id="PSIdesign1" class="small" <?php if($formViewer) { echo 'value="' . $row['PSIdesign1'] . '"';} ?>>PSI</td>
            <td><input name="PSIdesign2" type="text" id="PSIdesign2" class="small" <?php if($formViewer) { echo 'value="' . $row['PSIdesign2'] . '"';} ?>>PSI</td>
          </tr>
          <tr>
            <td>Open PSI</td>
            <td><input name="PSIreseat1" type="text" id="PSIreseat1" class="small" <?php if($formViewer) { echo 'value="' . $row['PSIreseat1'] . '"';} ?>>PSI</td>
            <td><input name="PSIreseat1" type="text" id="PSIreseat2" class="small" <?php if($formViewer) { echo 'value="' . $row['PSIreseat2'] . '"';} ?>>PSI</td>
          </tr>
          <tr>
            <td>Reseat PSI</td>
            <td><input name="PSIreseat1" type="text" id="PSIreseat1" class="small" <?php if($formViewer) { echo 'value="' . $row['PSIreseat1'] . '"';} ?>>PSI</td>
            <td><input name="PSIreseat2" type="text" id="PSIreseat2" class="small" <?php if($formViewer) { echo 'value="' . $row['PSIreseat2'] . '"';} ?>>PSI</td>
          </tr>
        </table></td>
    </tr>
  <!- ROW19 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><label>This pressure test was performed in accordance with Procedure No.</label>
        <input name="procedureNum" type="text" id="procedureNum" <?php if($formViewer) { echo 'value="' . $row['procedureNum'] . '"';} ?>> Revision <input name="procedureRev" type="text" id="procedureRev" <?php if($formViewer) { echo 'value="' . $row['procedureRev'] . '"';} ?>></td>
    </tr>
  <!- ROW20 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Dated <input name="witnessDate" type="text" id="witnessDate" <?php if($formViewer) { echo 'value="' . $row['witnessDate'] . '"';} ?>> and witnessed by the Registered Inspector.
      </td>
    </tr>
  <!- ROW21 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requirements of the DOT specification identified in this report </td>
    </tr>
  <!- ROW22 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
  <!- ROW23 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'P' </td>
    </tr>
  <!- ROW24 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">
      <h3>Hydrostatic Pressure Test Defect Report</h3>
      <p>Defects Corrected Without Welding: </p>
        <p>
          <textarea name="CorrectedWithoutWelding" id="CorrectedWithoutWelding" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectedWithoutWelding'];} ?></textarea>
        </p></td>
    </tr>
  <!- ROW25 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><p>Defects Corrected By Welding: </p>
        <p>
          <textarea name="CorrectedByWelding" id="CorrectedByWelding" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectedByWelding'];} ?></textarea>
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
<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
      <td colspan="3" class="center"><h2>Method 27 - Determination of Vapor Tightness of Gasoline Delivery Tank using Pressure-Vacuum Test</h2></td>
    </tr>
    <tr>
      <td colspan="3" class="center">EPA 40CFR Part 60 | DOT 49CFR [180.407(h)(2) and 180.417)]</td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
    <!- ROW1 --------------------------------------------------------------------->
    <tr>
      <td colspan="2">Cargo Tank is Insulated
        <label>
          <input type="radio" name="RadioGroupInsulated"  id="RadioGroupInsulated_0" <?php if($formViewer) { if ($row['RadioGroupInsulated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupInsulated"  id="RadioGroupInsulated_1" <?php if($formViewer) { if ($row['RadioGroupInsulated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
      <td>Cargo Tank is Lined
        <label>
          <input type="radio" name="RadioGroupLined"  id="RadioGroupLined_0" <?php if($formViewer) { if ($row['RadioGroupLined']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupLined"  id="RadioGroupLined_1" <?php if($formViewer) { if ($row['RadioGroupLined']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW2 ---------------------------------------------------------------------> 
    <tr>
      <td colspan="3">Cargo Tank is Used in Special or Dedicated Service
        <label>
          <input type="radio" name="RadioGroupDedicated"  id="RadioGroupDedicated_0" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupDedicated" id="RadioGroupDedicated_1" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW3 ---------------------------------------------------------------------> 
    <tr>
      <td colspan="3">Cargo tank used to haul product corrosive to tank
        <label>
          <input type="radio" name="RadioGroupCorrosive"  id="RadioGroupCorrosive_0" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupCorrosive"  id="RadioGroupCorrosive_1" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW4 ---------------------------------------------------------------------> 
    <tr>
      <td colspan="3"><h3>TEST PROCEDURE</h3></td>
    </tr>
    <!- ROW5 ---------------------------------------------------------------------> 
    <tr><td colspan="3"><ol>
    				<li>Open and close each dome cover.</li>
    				<li>Connect static electric ground connections to cargo tank. Attach vapor return hose(s) to vapor return line.</li>
    				<li>Attach the test cap to the end of the last vapor recovery hose. Test cap should have a pressure/vacuum inlet, monometer inlet pressure regulator or ball valve. A relief valve would insure safety.</li>
    				<li>Close all discharge valves and open all internal valves.</li>
    				<li>With regulator of ball valve in the closed position, attach pressure source to pressure/vacuum inlet.</li>
    				<li>Slowly open the pressure inlet vale (regulator or ball valve) and slowly pressurize the cargo tanks to 18&quot; or water column.</li>
    				<li>Close the shut-off valve and allow the pressure in the tank to stabilize, adjusting the pressure if necessary to maintain pressure of 18&quot; water column. When the pressure stabilizes, record the time and initial pressure.</li>
    				<li>At the end of 5 minutes, record the time and final pressure.</li>
    				<li>Repeat steps 7 through 9 until the change in pressure for two consecutive runs agrees with 18&quot; +0/-1&quot; criteria and the measured change of pressure between the two consecutive runs agrees within 0.5 H2O. Calculate the arithmetic average of the two results.</li>
    				<li>Compare the average measured change in pressure to the allowable pressure change +0/-1&quot; water column. If the delivery tank does not satisfy the vapor tightness criterion, repair the source of leakage and repeat the pressure test until the criterion is met.</li>
    				<li>Disconnect the pressure source from the pressure-vacuum inlet and slowly open the shut-off valve to bring the tank to atmospheric pressure.</li>
    				<li>Connect the vacuum source to the pressure-vacuum.</li>
    				<li>Open the valve in the test cap. Slowly evacuate the tank to 6&quot; water column.</li>
    				<li>Close the valve and allow the pressure in the tank to stabilize, adjusting the pressure if necessary to maintain a 6&quot; +0/-1&quot; vacuum pressure. When the pressure stabilizes, record the time and initial vacuum.</li>
    				<li>At the end of 5 minutes, record the time and final vacuum.</li>
    				<li>Repeat steps 14 through 16 until the change in vacuum for the two consecutive runs agrees with criteria 6&quot; +0/-1&quot; and the measured change of vacuum between the two consecutive runs agrees within 0.5 H2O. Calculate the arithmetic average of the two results.</li>
    				<li>Compare the average measured change in vacuum to the allowable vacuum changes, +0/-1&quot; water column. If the delivery tank does not satisfy the vapor tightness criterion specified in the regulation, repair the sources of leakage and repeat the vacuum test until the criterion is met.</li>
    				<li>Disconnect the vacuum source from the pressure-vacuum inlet and slowly open the valve to bring the tank to atmospheric pressure.</li>
    				<li>Connect the pressure source to the pressure-vacuum inlet, pressurize the cargo tank to just above 18&quot; of water column (W.C.). When the pressure reaches 18&quot; W.C., close the vapor valves. Bleed the pressure from the vapor line to zero pressure. Close the valve on the vapor line test fitting and begin timing the test. At the end of 5 minutes, the allowed pressure build up in the vapor line is 5&quot; W.C. If it exceeds 5&quot;, repair or replace vapor valve(s) and repeat test.</li>
    				</ol></td>
    </tr>
    <!- ROW6 ---------------------------------------------------------------------> 
    <tr>
      <td colspan="3"><h3>TEST RESULTS</h3></td>
    </tr>
    <!- ROW7 ---------------------------------------------------------------------> 
    <tr>
      <td colspan="3"><table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; border-color:#ccc; text-align:right;">
          <tr>
            <th class="center">Pressure Test No. 1</th>
            <th class="center">Time</th>
            <th class="center">Pressure Test No. 2</th>
            <th class="center">Time</th>
          </tr>
          <tr>
            <td><label>Start Pressure</label>
              <input type="text" name="press_one_start" id="press_one_start" class="small" <?php if($formViewer) { echo 'value="' . $row['press_one_start'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="press_one_start_time" id="press_one_start_time" class="small" <?php if($formViewer) { echo 'value="' . $row['press_one_start_time'] . '"';} ?>></td>
            <td><label>Start Pressure</label>
              <input type="text" name="press_two_start" id="press_two_start" class="small" <?php if($formViewer) { echo 'value="' . $row['press_two_start'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="press_two_start_time" id="press_two_start_time" class="small" <?php if($formViewer) { echo 'value="' . $row['press_two_start_time'] . '"';} ?>></td>
          </tr>
          <tr>
            <td><label>Finish Pressure</label>
              <input type="text" name="press_one_finish" id="press_one_finish" class="small" <?php if($formViewer) { echo 'value="' . $row['press_one_finish'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="press_one_finish_time" id="press_one_finish_time" class="small" <?php if($formViewer) { echo 'value="' . $row['press_one_finish_time'] . '"';} ?>></td>
            <td><label>Finish Pressure</label>
              <input type="text" name="press_two_finish" id="press_two_finish" class="small" <?php if($formViewer) { echo 'value="' . $row['press_two_finish'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="press_two_finish_time" id="press_two_finish_time" class="small" <?php if($formViewer) { echo 'value="' . $row['press_two_finish_time'] . '"';} ?>></td>
          </tr>
          <tr>
            <td><label>Change</label>
              <input type="text" name="press_one_change" id="press_one_change" class="small" <?php if($formViewer) { echo 'value="' . $row['press_one_change'] . '"';} ?>>
              "W.C.</td>
            <td>&nbsp;</td>
            <td><label>Change</label>
              <input type="text" name="press_two_change" id="press_two_change" class="small" <?php if($formViewer) { echo 'value="' . $row['press_two_change'] . '"';} ?>>
              "W.C.</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="left"><label>Measured Change From Test 1 to Test 2 = </label>
              <input type="text" name="press_measured_change" id="press_measured_change" class="small" <?php if($formViewer) { echo 'value="' . $row['press_measured_change'] . '"';} ?>>
              "W.C.</td>
          </tr>
          <tr>
            <td colspan="4" align="left"><label>Calculate the Arithmetic Average of the Two Tests = </label>
              <input type="text" name="press_calculate_change" id="press_calculate_change" class="small" <?php if($formViewer) { echo 'value="' . $row['press_calculate_change'] . '"';} ?>>
              "W.C.</td>
          </tr>
        </table></td>
    </tr>
    <!- ROW8 ---------------------------------------------------------------------> 
    <tr>
      <td colspan="3"><table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; border-color:#ccc; text-align:right;">
          <tr>
            <th class="center">Vacuum Test No. 1</th>
            <th class="center">Time</th>
            <th class="center">Vacuum Test No. 2</th>
            <th class="center">Time</th>
          </tr>
          <tr>
            <td><label>Start Pressure</label>
              <input type="text" name="vac_one_start" id="vac_one_start" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_one_start'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="vac_one_start_time" id="vac_one_start_time" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_one_start_time'] . '"';} ?>></td>
            <td><label>Start Pressure</label>
              <input type="text" name="vac_two_start" id="vac_two_start" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_two_start'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="vac_two_start_time" id="vac_two_start_time" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_two_start_time'] . '"';} ?>></td>
          </tr>
          <tr>
            <td><label>Finish Pressure</label>
              <input type="text" name="vac_one_finish" id="vac_one_finish" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_one_finish'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="vac_one_finish_time" id="vac_one_finish_time" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_one_finish_time'] . '"';} ?>></td>
            <td><label>Finish Pressure</label>
              <input type="text" name="vac_two_finish" id="vac_two_finish" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_two_finish'] . '"';} ?>>
              "W.C.</td>
            <td class="center"><input type="text" name="vac_two_finish_time" id="vac_two_finish_time" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_two_finish_time'] . '"';} ?>></td>
          </tr>
          <tr>
            <td><label>Change</label>
              <input type="text" name="vac_one_change" id="vac_one_change" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_one_change'] . '"';} ?>>
              "W.C.</td>
            <td>&nbsp;</td>
            <td><label>Change</label>
              <input type="text" name="vac_two_change" id="vac_two_change" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_two_change'] . '"';} ?>>
              "W.C.</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="left"><label>Measured Change From Test 1 to Test 2 = </label>
              <input type="text" name="vac_measured_change" id="vac_measured_change" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_measured_change'] . '"';} ?>>
              "W.C.</td>
          </tr>
          <tr>
            <td colspan="4" align="left"><label>Calculate the Arithmetic Average of the Two Tests = </label>
              <input type="text" name="vac_calculate_change" id="vac_calculate_change" class="small" <?php if($formViewer) { echo 'value="' . $row['vac_calculate_change'] . '"';} ?>>
              "W.C.</td>
          </tr>
          <tr>
            <td colspan="4" align="left"><label>Measured Increase in vapor vent test</label>
              <input type="text" name="vapor_vent" id="vapor_vent" class="small" <?php if($formViewer) { echo 'value="' . $row['vapor_vent'] . '"';} ?>>
              "W.C.</td>
          </tr>
        </table></td>
    </tr>
    <!- ROW9 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Repairs Required for Compliance?
        <label>
          <input type="radio" name="RadioGroupRepair" value="yes" id="RadioGroupRepair_0" <?php if($formViewer) { if ($row['RadioGroupRepair']=='yes') {echo 'checked';};}; ?>>
          Yes </label>
        <label>
          <input type="radio" name="RadioGroupRepair" value="no" id="RadioGroupRepair_1" <?php if($formViewer) { if ($row['RadioGroupRepair']=='yes') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW10 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Were repairs made by welding
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes" id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no" id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
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
      <td colspan="3"><p>Corrective Action for Non-Acceptable Conditions: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
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
        Marking applied Month - Year - Letter 'K-EPA27' </td>
    </tr>
    <!-- /.FORM ================================================== -->
    <?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
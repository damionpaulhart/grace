<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
    <td colspan="3" class="center"><h2>MC 330/331 LEAKAGE TEST REPORT</h2></td>
    </tr>
    
  <tr>
    <td colspan="3" class="center">Per 49 CFR 180.407 b</td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
  <!- ROW1 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>MAWP</label>
        <input class="small" type="text" name="mawp" id="mawp" <?php if($formViewer) { echo 'value="' . $row['mawp'] . '"';} ?>> psig</td>
      <td align="right"><label>AT</label>
        <input class="small" type="text" name="temprature" id="temprature" <?php if($formViewer) { echo 'value="' . $row['temprature'] . '"';} ?>> F&deg;</td>
    </tr>

  <!- ROW2 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="2"><label>Material Specification</label>
        <input type="text" name="materialspec" id="materialspec" <?php if($formViewer) { echo 'value="' . $row['materialspec'] . '"';} ?>></td>
      <td align="right"><label>Leakage Test Pressure</label>
        <input class="small" type="text" name="testpressure" id="testpressure" <?php if($formViewer) { echo 'value="' . $row['testpressure'] . '"';} ?>>psig</td>
    </tr>
  <!- ROW3 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="3"><label>Special Service of the Cargo Tank</label>
        <input type="text" style="width:550px" name="serviceoftank" id="serviceoftank" <?php if($formViewer) { echo 'value="' . $row['serviceoftank'] . '"';} ?>></td>
    </tr>
  <!- ROW4 --------------------------------------------------------------------->
  <tr>
      <td align="right" colspan="3"><label>Liquid Used For the Test</label>
        <input type="text" style="width:550px" name="fluid" id="fluid" <?php if($formViewer) { echo 'value="' . $row['fluid'] . '"';} ?>></td>
    </tr>
  <!- ROW5 --------------------------------------------------------------------->
  <tr>
  		<td>&nbsp;</td>
      <td align="right"><label>Hose I.D. Number</label>
        <input type="text" name="hoseID1" id="hoseID1" <?php if($formViewer) { echo 'value="' . $row['hoseID1'] . '"';} ?>></td>
      <td align="right"><label>Date of Original Hose Assy.</label>
        <input type="text" name="dateHose1" id="dateHose1" <?php if($formViewer) { echo 'value="' . $row['dateHose1'] . '"';} ?>></td>
    </tr>
  <!- ROW6 --------------------------------------------------------------------->
  <tr>
  <td>&nbsp;</td>
      <td align="right"><label>Hose I.D. Number</label>
        <input type="text" name="hoseID2" id="hoseID2" <?php if($formViewer) { echo 'value="' . $row['hoseID2'] . '"';} ?>></td>
      <td align="right"><label>Date of Original Hose Assy.</label>
        <input type="text" name="dateHose2" id="dateHose2" <?php if($formViewer) { echo 'value="' . $row['dateHose2'] . '"';} ?>></td>
    </tr>
  <!- ROW7 --------------------------------------------------------------------->
  <tr>
  	<td>&nbsp;</td>
      <td align="right"><label>Hose I.D. Number</label>
        <input type="text" name="hoseID3" id="hoseID3" <?php if($formViewer) { echo 'value="' . $row['hoseID3'] . '"';} ?>></td>
      <td align="right"><label>Date of Original Hose Assy.</label>
        <input type="text" name="dateHose3" id="dateHose3" <?php if($formViewer) { echo 'value="' . $row['dateHose3'] . '"';} ?>></td>
    </tr>
  <!- ROW8 --------------------------------------------------------------------->
  <tr>
  <td>&nbsp;</td>
      <td align="right"><label>Hose I.D. Number</label>
        <input type="text" name="hoseID4" id="hoseID4" <?php if($formViewer) { echo 'value="' . $row['hoseID4'] . '"';} ?>></td>
      <td align="right"><label>Date of Original Hose Assy.</label>
        <input type="text" name="dateHose4" id="dateHose4" <?php if($formViewer) { echo 'value="' . $row['dateHose4'] . '"';} ?>></td>
    </tr>
  <!- ROW9 --------------------------------------------------------------------->
  <tr>
  <td>&nbsp;</td>
      <td align="right"><label>Hose I.D. Number</label>
        <input type="text" name="hoseID5" id="hoseID5" <?php if($formViewer) { echo 'value="' . $row['hoseID5'] . '"';} ?>></td>
      <td align="right"><label>Date of Original Hose Assy.</label>
        <input type="text" name="dateHose5" id="dateHose5" <?php if($formViewer) { echo 'value="' . $row['dateHose5'] . '"';} ?>></td>
    </tr>
  <!- ROW10 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">
      	<table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td>ITEM</td>
            <td>DESCRIPTION</td>
            <td>COMPLIES</td>
            <td>NEEDS REPAIRS</td>
          </tr>
          <tr>
            <td style="vertical-align:top;">1</td>
            <td nobreak align="left">With internal valves closed and discharged valves open, pressurize vessel, if necessary, to a pressure allow in 180.407 (h)(l)(i) or (ii).<br>
            				Check for internal valve leakage.</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="vertical-align:top;">2</td>
            <td nobreak align="left">Close discharge calces, open internal valves, bring vessel, components piping and hose(s) if attached, to full leakage test pressure. hold for 5 minutes with zero pressure drop. Inspect all surfaces for leaks. Inspect all gasketed, threaded and welded joints for leaks.</td>
            <td><input type="radio" name="radio2" id="1" value="1" <?php if($formViewer) { if ($row['radio2']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="2" value="2" <?php if($formViewer) { if ($row['radio2']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden; vertical-align:top;">3</td>
            <td colspan="3" nobreak align="left">Inspect piping system for any of the following and welded joints for leaks</td>
            </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(a) External leak identifiable without the use of instruments.</td>
            <td><input type="radio" name="radio3" id="1" value="1" <?php if($formViewer) { if ($row['radio3']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="2" value="2" <?php if($formViewer) { if ($row['radio3']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(b) Bolts that are loose, missing or severely corroded.</td>
            <td><input type="radio" name="radio4" id="1" value="1" <?php if($formViewer) { if ($row['radio4']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio4" id="2" value="2" <?php if($formViewer) { if ($row['radio4']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(c) Manual stop valves that will not activate</td>
            <td><input type="radio" name="radio5" id="1" value="1" <?php if($formViewer) { if ($row['radio5']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio5" id="2" value="2" <?php if($formViewer) { if ($row['radio5']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(d) Rubber hose flexible connectors with any condition described in 180.416 (g)(1)</td>
            <td><input type="radio" name="radio6" id="1" value="1" <?php if($formViewer) { if ($row['radio6']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio6" id="2" value="2" <?php if($formViewer) { if ($row['radio6']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(e) Stainless steel flexible connectors with damaged reinforcement braid</td>
            <td><input type="radio" name="radio7" id="1" value="1" <?php if($formViewer) { if ($row['radio7']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio7" id="2" value="2" <?php if($formViewer) { if ($row['radio7']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(f) Internal self-closing stop valves that fail to close or that permit leakage through the valve detectable without the use of instruments</td>
            <td><input type="radio" name="radio8" id="1" value="1" <?php if($formViewer) { if ($row['radio8']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio8" id="2" value="2" <?php if($formViewer) { if ($row['radio8']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td>&nbsp;</td>
            <td nobreak align="left">(g) Pipe or joints that are severely corroded</td>
            <td><input type="radio" name="radio9" id="1" value="1" <?php if($formViewer) { if ($row['radio9']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio9" id="2" value="2" <?php if($formViewer) { if ($row['radio9']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden; vertical-align:top;">4</td>
            <td colspan="3"  align="left" nobreak>Leakage test for delivery hoses(s): <br />
			<input type="checkbox" name="meteredService" id="meteredService" <?php if($formViewer) { if ($row['meteredService']=="on") {echo 'checked';};}; ?>> 
			Metered Service <br />
			<input type="checkbox" name="nonmeteredService" id="nonmeteredService" <?php if($formViewer) { if ($row['nonmeteredService']=="on") {echo 'checked';};}; ?>>
			Non-Metered Service <br />
			<input type="checkbox" name="hoseAttached" id="hoseAttached" <?php if($formViewer) { if ($row['hoseAttached']=="on") {echo 'checked';};}; ?>>
			Hose(s) attached to vessel <br />
			<input type="checkbox" name="hoseSeperate" id="hoseSeperate" <?php if($formViewer) { if ($row['hoseSeperate']=="on") {echo 'checked';};}; ?>>
			Hose(s) test separately at same leakage test pressure as vessel
			</td>
            </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left">(a) For hose(s) attached to vessel, extend, secure, plug end(s) if necessary and open valve(s) to fully pressurize</td>
            <td><input type="radio" name="radio10" id="1" value="1" <?php if($formViewer) { if ($row['radio10']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio10" id="2" value="2" <?php if($formViewer) { if ($row['radio10']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td colspan="3" nobreak align="left">(b) Inspect hose assembly(ies) for any of the following conditions:</td>
            </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left"><blockquote>(i) Damage to hose cover that exposes the reinforcement</blockquote></td>
            <td><input type="radio" name="radio11" id="1" value="1" <?php if($formViewer) { if ($row['radio11']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio11" id="2" value="2" <?php if($formViewer) { if ($row['radio11']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left"><blockquote>(ii) Wire braid reinforcement that has been kinked or flattened so as to permanently deform the wire braid</blockquote></td>
            <td><input type="radio" name="radio12" id="1" value="1" <?php if($formViewer) { if ($row['radio12']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio12" id="2" value="2" <?php if($formViewer) { if ($row['radio12']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left"><blockquote>(iii) Soft spots when not under pressure, bulging under pressure, or loose outer covering</blockquote></td>
            <td><input type="radio" name="radio13" id="1" value="1" <?php if($formViewer) { if ($row['radio13']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio13" id="2" value="2" <?php if($formViewer) { if ($row['radio13']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td style="border-bottom:hidden">&nbsp;</td>
            <td nobreak align="left"><blockquote>(iv) Loose or missing bolts or fastenings on bolted hose coupling assemblies</blockquote></td>
            <td><input type="radio" name="radio14" id="1" value="1" <?php if($formViewer) { if ($row['radio14']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio14" id="2" value="2" <?php if($formViewer) { if ($row['radio14']=='2') {echo 'checked';};}; ?>></td>
          </tr>
		  <tr>
            <td>&nbsp;</td>
            <td nobreak align="left"><blockquote>(v) Hose expiration date has passed</blockquote></td>
            <td><input type="radio" name="radio15" id="1" value="1" <?php if($formViewer) { if ($row['radio15']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio15" id="2" value="2" <?php if($formViewer) { if ($row['radio15']=='2') {echo 'checked';};}; ?>></td>
          </tr>
        </table></td>
    </tr>
  <!- ROW11 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><p>Defects found, location and corrective action: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
    </tr>
  <!- ROW12 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the DOT specification requirements listed in this report </td>
    </tr>
  <!- ROW13 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank does not meet the DOT specification requirements listed in this report </td>
    </tr>
  <!- ROW14 --------------------------------------------------------------------->
  <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Month - Year - 'K' marked on the cargo tank</td>
    </tr>  
  <!- ROW15 --------------------------------------------------------------------->
  <tr>
      <td colspan="3">Were welded repairs made to the cargo tank shell or heads
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes"  id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no"  id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
  <!- ROW16 --------------------------------------------------------------------->
  <tr>
      <td colspan="2"><label>National Board Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td align="right"><label>ASME Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>

<!-- /.FORM ================================================== -->
<?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
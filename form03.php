<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
      <td colspan="3" class="center"><h2>EXTERNAL VISUAL INSPECTION REPORT</h2></td>
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
    <!- ROW3 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Internal Visual Inpection Made
        <label>
          <input type="radio" name="RadioGroupVisual" value="yes" id="RadioGroupVisual_0" <?php if($formViewer) { if ($row['RadioGroupVisual']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupVisual" value="no" id="RadioGroupVisual_1" <?php if($formViewer) { if ($row['RadioGroupVisual']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW4 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Cargo Tank is Used in Special or Dedicated Service
        <label>
          <input type="radio" name="RadioGroupDedicated"  id="RadioGroupDedicated_0" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupDedicated" id="RadioGroupDedicated_1" <?php if($formViewer) { if ($row['RadioGroupDedicated']=='no') {echo 'checked';};}; ?>>
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
          </tr>
          <tr>
            <td><input name="comp1cap" type="text" id="comp1cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1cap'] . '"';} ?>></td>
            <td><input name="comp2cap" type="text" id="comp2cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2cap'] . '"';} ?>></td>
            <td><input name="comp3cap" type="text" id="comp3cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3cap'] . '"';} ?>></td>
            <td><input name="comp4cap" type="text" id="comp4cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4cap'] . '"';} ?>></td>
            <td><input name="comp5cap" type="text" id="comp5cap" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5cap'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW6 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Cargo tank used to haul product corrosive to tank
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="yes" id="RadioGroupCorrosive_0" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupCorrosive" value="no" id="RadioGroupCorrosive_1" <?php if($formViewer) { if ($row['RadioGroupCorrosive']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW7 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Upper Coupler Assembly Removed <span class="smaller">(required every two years for tanks in corrosive service)</span>
        <label>
          <input type="radio" name="RadioGroupAssembly" value="yes" id="RadioGroupAssembly_0" <?php if($formViewer) { if ($row['RadioGroupAssembly']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupAssembly" value="no" id="RadioGroupAssembly_1" <?php if($formViewer) { if ($row['RadioGroupAssembly']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW8 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Pressure Relief Vent Removed and Tested <span class="smaller">(required every two years for tanks in corrosive svc. If yes, complete below)</span>
        <label>
          <input type="radio" name="RadioGroupRelief" value="yes" id="RadioGroupRelief_0" <?php if($formViewer) { if ($row['RadioGroupRelief']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupRelief" value="no" id="RadioGroupRelief_1" <?php if($formViewer) { if ($row['RadioGroupRelief']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW9 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><table width="100%" border="0">
          <tr>
            <td>&nbsp;</td>
            <td>Comp#1</td>
            <td>Comp#2</td>
            <td>Comp#3</td>
            <td>Comp#4</td>
            <td>Comp#5</td>
          </tr>
          <tr>
            <td>Design PSI</td>
            <td><input name="comp1des" type="text" id="comp1des" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1des'] . '"';} ?>></td>
            <td><input name="comp2des" type="text" id="comp2des" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2des'] . '"';} ?>></td>
            <td><input name="comp3des" type="text" id="comp3des" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3des'] . '"';} ?>></td>
            <td><input name="comp4des" type="text" id="comp4des" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4des'] . '"';} ?>></td>
            <td><input name="comp5des" type="text" id="comp5des" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5des'] . '"';} ?>></td>
          </tr>
          <tr>
            <td>Open PSI</td>
            <td><input name="comp1open" type="text" id="comp1open" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1open'] . '"';} ?>></td>
            <td><input name="comp2open" type="text" id="comp2open" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2open'] . '"';} ?>></td>
            <td><input name="comp3open" type="text" id="comp3open" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3open'] . '"';} ?>></td>
            <td><input name="comp4open" type="text" id="comp4open" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4open'] . '"';} ?>></td>
            <td><input name="comp5open" type="text" id="comp5open" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5open'] . '"';} ?>></td>
          </tr>
          <tr>
            <td>Close PSI</td>
            <td><input name="comp1close" type="text" id="comp1close" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1close'] . '"';} ?>></td>
            <td><input name="comp2close" type="text" id="comp2close" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2close'] . '"';} ?>></td>
            <td><input name="comp3close" type="text" id="comp3close" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3close'] . '"';} ?>></td>
            <td><input name="comp4close" type="text" id="comp4close" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4close'] . '"';} ?>></td>
            <td><input name="comp5close" type="text" id="comp5close" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5close'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW10 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td>Inspection Steps</td>
            <td>Acceptable</td>
            <td>Non-Acceptable</td>
            <td>See Corrective Action</td>
          </tr>
          <tr>
            <td nobreak>Shell and heads: condition of welds - dents - gouges - corrosion or abrasion.</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="3" value="3" <?php if($formViewer) { if ($row['radio1']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Upper coupler assembly: condition of plate - corrosion, deformation and lubrication - bolt tightness - king pin wear and deformation.</td>
            <td><input type="radio" name="radio2" id="1" value="1" <?php if($formViewer) { if ($row['radio2']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="2" value="2" <?php if($formViewer) { if ($row['radio2']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="3" value="3" <?php if($formViewer) { if ($row['radio2']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Bolted attachments: pipling brackets and supports - valve installations - valve operator installation - dust cap retainers - all tank to frame and/or undercarriage attachments</td>
            <td><input type="radio" name="radio3" id="1" value="1" <?php if($formViewer) { if ($row['radio3']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="2" value="2" <?php if($formViewer) { if ($row['radio3']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="3" value="3" <?php if($formViewer) { if ($row['radio3']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>All major appurtenances and structural attachments on the cargo tank, including suspension system attachments, connecting structures, fream(s), cross-members, outriggers and bolsters</td>
            <td><input type="radio" name="radio4" id="1" value="1" <?php if($formViewer) { if ($row['radio4']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio4" id="2" value="2" <?php if($formViewer) { if ($row['radio4']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio4" id="3" value="3" <?php if($formViewer) { if ($row['radio4']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Piping and all valves and adapters: attachments - leakage - handles and levers - cables and air lines - shear sections - dust caps - all gasters or o-rings - lubrication points</td>
            <td><input type="radio" name="radio5" id="1" value="1" <?php if($formViewer) { if ($row['radio5']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio5" id="2" value="2" <?php if($formViewer) { if ($row['radio5']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio5" id="3" value="3" <?php if($formViewer) { if ($row['radio5']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Internal valve operation: three means of clusure (normal, remote, and thermal) - function check - cable adjustment - condition of cables and pulleys - interconnection with load/unload vents - fusiles - brake interlocks - lubrication points</td>
            <td><input type="radio" name="radio6" id="1" value="1" <?php if($formViewer) { if ($row['radio6']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio6" id="2" value="2" <?php if($formViewer) { if ($row['radio6']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio6" id="3" value="3" <?php if($formViewer) { if ($row['radio6']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Manhole assembly area (for each compartment): evidence of leakage - warpage, corrosion and impact damage to dome and filler covers, weld collar, gasket seal surfaces, overturn protection structure, clamphing ring, and all welds - condition of filter cover and all dome gaskets - condition of latches, hinges, all bolted connections and drains</td>
            <td><input type="radio" name="radio7" id="1" value="1" <?php if($formViewer) { if ($row['radio7']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio7" id="2" value="2" <?php if($formViewer) { if ($row['radio7']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio7" id="3" value="3" <?php if($formViewer) { if ($row['radio7']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Pressure relief devices: verify all vents presetn - verifiy venting adquate for tank - markings on vents - visual check of fusible plugs</td>
            <td><input type="radio" name="radio8" id="1" value="1" <?php if($formViewer) { if ($row['radio8']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio8" id="2" value="2" <?php if($formViewer) { if ($row['radio8']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio8" id="3" value="3" <?php if($formViewer) { if ($row['radio8']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Placards, location and condition</td>
            <td><input type="radio" name="radio9" id="1" value="1" <?php if($formViewer) { if ($row['radio9']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio9" id="2" value="2" <?php if($formViewer) { if ($row['radio9']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio9" id="3" value="3" <?php if($formViewer) { if ($row['radio9']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td nobreak>Specification plate markings legible and per 49CFR Part 178. Cargo tank inspection and test markings are current with 49CFR Part 180</td>
            <td><input type="radio" name="radio10" id="1" value="1" <?php if($formViewer) { if ($row['radio10']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio10" id="2" value="2" <?php if($formViewer) { if ($row['radio10']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio10" id="3" value="3" <?php if($formViewer) { if ($row['radio10']=='3') {echo 'checked';};}; ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW11 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><p>Corrective Action for Non-Acceptable Conditions: </p>
        <p>
          <textarea name="CorrectiveAction" id="CorrectiveAction" cols="70" rows="5"><?php if($formViewer) { echo $row['CorrectiveAction'];} ?></textarea>
        </p></td>
    </tr>
    <!- ROW12 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Thickness testing performed on corroded or abraded areas
        <label>
          <input type="radio" name="RadioGroupThick" value="yes" id="RadioGroupThick_0" <?php if($formViewer) { if ($row['RadioGroupThick']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupThick" value="no" id="RadioGroupThick_1" <?php if($formViewer) { if ($row['RadioGroupThick']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW13 --------------------------------------------------------------------->
    <tr>
      <td colspan="3" align="right">Is a sketch included to show areas(s)
        <label>
          <input type="radio" name="RadioGroupSketch" value="yes" id="RadioGroupSketch_0" <?php if($formViewer) { if ($row['RadioGroupSketch']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupSketch" value="no" id="RadioGroupSketch_1" <?php if($formViewer) { if ($row['RadioGroupSketch']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW14 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Were repairs made by welding
        <label>
          <input type="radio" name="RadioGroupWeld" value="yes" id="RadioGroupWeld_0" <?php if($formViewer) { if ($row['RadioGroupWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupWeld" value="no" id="RadioGroupWeld_1" <?php if($formViewer) { if ($row['RadioGroupWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW15 --------------------------------------------------------------------->
    <tr>
      <td colspan="2"><label>National Board "R" Stamp No.</label>
        <input name="Rstamp" type="text" id="Rstamp" <?php if($formViewer) { echo 'value="' . $row['Rstamp'] . '"';} ?>>
      <td><label>ASME "U" Stamp No.</label>
        <input name="Ustamp" type="text" id="Ustamp" class="small" <?php if($formViewer) { echo 'value="' . $row['Ustamp'] . '"';} ?>></td>
    </tr>
    <!- ROW16 --------------------------------------------------------------------->
    <tr>
      <td colspan="3" align="right">Is a sketch included to show area(s)
        <label>
          <input type="radio" name="RadioGroupSketchWeld" value="yes" id="RadioGroupSketchWeld_0" <?php if($formViewer) { if ($row['RadioGroupSketchWeld']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupSketchWeld" value="no" id="RadioGroupSketchWeld_1" <?php if($formViewer) { if ($row['RadioGroupSketchWeld']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW17 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="meetsReq" id="meetsReq" <?php if($formViewer) { if ($row['meetsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank meets the requiremets of the DOT specification identified in this report </td>
    </tr>
    <!- ROW18 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="failsReq" id="failsReq" <?php if($formViewer) { if ($row['failsReq']=="on") {echo 'checked';};}; ?>>
        Cargo tank fails to meet the requirements of the DOT specification identified in this report </td>
    </tr>
    <!- ROW19 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><input type="checkbox" name="markingApplied" id="markingApplied" <?php if($formViewer) { if ($row['markingApplied']=="on") {echo 'checked';};}; ?>>
        Marking applied Month - Year - Letter 'V' </td>
    </tr>
    <!-- /.FORM ================================================== -->
    <?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
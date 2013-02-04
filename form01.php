<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<form action="<?php if (!$formViewer) {echo 'dev-form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?php echo $form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
      <td colspan="3" class="center"><h2>Upper Coupler Inspection</h2></td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
    <!- ROW1 --------------------------------------------------------------------->
    <tr>
      <td align="right" colspan="2"><label>MSQP/DESIGN PRESSURE</label>
        <input type="text" name="designpressure" id="designpressure" <?php if($formViewer) { echo 'value="' . $row['designpressure'] . '"';} ?>"></td>
      <td align="right"><label>TEST PRESSURE</label>
        <input type="text" name="testpressure" id="testpressure" <?php if($formViewer) { echo 'value="' . $row['testpressure'] . '"';} ?>></td>
    </tr>
    <!- ROW2 --------------------------------------------------------------------->
    <tr>
      <td align="right">Compartment Sizes F to R</td>
      <td colspan="2" align="right"><label>1</label>
        <input name="comp1size" type="text" id="comp1size" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1size'] . '"';} ?>>
        <label>2</label>
        <input type="text" name="comp2size" id="comp2size" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2size'] . '"';} ?>>
        <label>3</label>
        <input type="text" name="comp3size" id="comp3size" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3size'] . '"';} ?>>
        <label>4</label>
        <input type="text" name="comp4size" id="comp4size" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4size'] . '"';} ?>></td>
    </tr>
    <!- ROW3 --------------------------------------------------------------------->
    <tr>
      <td colspan="2"><label>Total Capacity</label>
        <input type="text" name="totalcapacity" id="totalcapacity" <?php if($formViewer) { echo 'value="' . $row['totalcapacity'] . '"';} ?>>
        GAL.</td>
      <td><label>
          <input type="checkbox" name="doublebulk" id="doublebulk" <?php if($formViewer) { if ($row['doublebulk']=="on") {echo 'checked';};}; ?>>
          Double Bulkhead</label>
        <label>
          <input type="checkbox" name="insulated" id="insulated" <?php if($formViewer) { if ($row['insulated']=="on") {echo 'checked';};}; ?>>
          Insulated</label></td>
    </tr>
    <!- ROW4 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">
      	<p>Dot mandatory items indicateed with &quot;M&quot; on checklist:</p>
      	<table width="100%" border="1" cellpadding="3" style="border-collapse:collapse; text-align:center;">
          <tr>
            <td>Item No</td>
            <td>Activity</td>
            <td>Complies</td>
            <td>Repair Needed</td>
            <td>See Remarks</td>
          </tr>
          <tr>
            <td colspan="5" align="left">COMPANY TANK ENTRY SAFETY PROCEDURES AND<br>
              ALL OSHA REGULATION MUST BE COMPLIED WITH</td>
          </tr>
          <tr>
            <td>1M</td>
            <td nobreak>Removed upper coupler for inspection</td>
            <td><input type="radio" name="radio1" id="1" value="1" <?php if($formViewer) { if ($row['radio1']=='1') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="2" value="2" <?php if($formViewer) { if ($row['radio1']=='2') {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio1" id="3" value="3" <?php if($formViewer) { if ($row['radio1']=='3') {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>2M</td>
            <td nobreak>Clean and Inspect all mounting surfaces on plate and tank</td>
            <td><input type="radio" name="radio2" id="1" value="1" <?php if($formViewer) { if ($row['radio2']=="1") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="2" value="2" <?php if($formViewer) { if ($row['radio2']=="2") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio2" id="3" value="3" <?php if($formViewer) { if ($row['radio2']=="3") {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>3M</td>
            <td nobreak>Inspect all weld areas and crossmember for cracks and/or corrostion in upper couple assembly</td>
            <td><input type="radio" name="radio3" id="1" value="1" <?php if($formViewer) { if ($row['radio3']=="1") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="2" value="2" <?php if($formViewer) { if ($row['radio3']=="2") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio3" id="3" value="3" <?php if($formViewer) { if ($row['radio3']=="3") {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>4M</td>
            <td nobreak>Inspect and gauge pin for wear allowances</td>
            <td><input type="radio" name="radio4" id="1" value="1" <?php if($formViewer) { if ($row['radio4']=="1") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio4" id="2" value="2" <?php if($formViewer) { if ($row['radio4']=="2") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio4" id="3" value="3" <?php if($formViewer) { if ($row['radio4']=="3") {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>5M</td>
            <td nobreak>Reinstall upper coupler with new mounting hardware</td>
            <td><input type="radio" name="radio5" id="1" value="1" <?php if($formViewer) { if ($row['radio5']=="1") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio5" id="2" value="2" <?php if($formViewer) { if ($row['radio5']=="2") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio5" id="3" value="3" <?php if($formViewer) { if ($row['radio5']=="3") {echo 'checked';};}; ?>></td>
          </tr>
          <tr>
            <td>6M</td>
            <td nobreak>Tank Marking: Date (month &amp; year( and service symbol (UC) after all defects are corrected</td>
            <td><input type="radio" name="radio6" id="1" value="1" <?php if($formViewer) { if ($row['radio6']=="1") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio6" id="2" value="2" <?php if($formViewer) { if ($row['radio6']=="2") {echo 'checked';};}; ?>></td>
            <td><input type="radio" name="radio6" id="3" value="3" <?php if($formViewer) { if ($row['radio6']=="3") {echo 'checked';};}; ?>></td>
          </tr>
        </table></td>
    </tr>
<?php
 require_once 'signature.php';
?>
<!-- ================================================== -->
<?php
 require_once 'footer.php';
?>

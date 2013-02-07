<?php
$form_name = basename(__FILE__, ".php");
require_once 'starter.php';
?>

<!-- FORM ================================================== -->

<form action="<?php if (!$formViewer) {echo 'form-save.php';}; ?>" method="post" name="<?php echo $form_name ?>" id="<?php echo $form_name ?>" <?php if($formViewer) { echo 'class="formViewer"'; } ?>>
  <input type="hidden" name="form_name" id="form_name" value="<?=$form_name ?>" />
  <table width="768px" border="0" cellpadding="8">
    <tr>
      <td colspan="3" align="center"><h2>Wet Test &amp; Interlock Inspection</h2></td>
    </tr>
    <?php require_once 'form_meta.php'; ?>
    <!- ROW1 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><h3>Wet Test Inspection</h3></td>
    </tr>
    <!- ROW2 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">This document certifies the above trailer has completed and passed the annual wet test requirement for overfill protection probes. This certifies the entire operation of the truck overfill protection system is properly wired and the entire system is working proerly. The trailer meets the requirement for the overfill probes to set where the maximum Safe fill is 60 gallons less than the manufactures specified compartment capacity. </td>
    </tr>
    <!- ROW3 --------------------------------------------------------------------->
    <tr>
      <td>Probes test and set properly: </td>
      <td colspan="2"><label>
          <input type="radio" name="RadioGroupProbes" value="yes" id="RadioGroupProbes_0" <?php if($formViewer) { if ($row['RadioGroupProbes']=='yes') {echo 'checked';};}; ?>>
          Yes</label>
        <label>
          <input type="radio" name="RadioGroupProbes" value="no" id="RadioGroupProbes_1" <?php if($formViewer) { if ($row['RadioGroupProbes']=='no') {echo 'checked';};}; ?>>
          No</label></td>
    </tr>
    <!- ROW4 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><table width="100%" border="0">
          <tr>
            <td>Comp#1</td>
            <td>Comp#2</td>
            <td>Comp#3</td>
            <td>Comp#4</td>
            <td>Comp#5</td>
            <td>Comp#6</td>
          </tr>
          <tr>
            <td><input name="comp1wet" type="text" id="comp1wet" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1wet'] . '"';} ?>></td>
            <td><input name="comp2wet" type="text" id="comp2wet" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2wet'] . '"';} ?>></td>
            <td><input name="comp3wet" type="text" id="comp3wet" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3wet'] . '"';} ?>></td>
            <td><input name="comp4wet" type="text" id="comp4wet" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4wet'] . '"';} ?>></td>
            <td><input name="comp5wet" type="text" id="comp5wet" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5wet'] . '"';} ?>></td>
            <td><input name="comp6wet" type="text" id="comp6wet" class="small" <?php if($formViewer) { echo 'value="' . $row['comp6wet'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW5 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><h3>Brake Interlock Inspection</h3></td>
    </tr>
    <!- ROW6 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Product Adapter - Brake Interlock Tested </td>
    </tr>
    <!- ROW7 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><table width="100%" border="0">
          <tr>
            <td>Comp#1</td>
            <td>Comp#2</td>
            <td>Comp#3</td>
            <td>Comp#4</td>
            <td>Comp#5</td>
            <td>Comp#6</td>
          </tr>
          <tr>
            <td><input name="comp1brake" type="text" id="comp1brake" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1brake'] . '"';} ?>></td>
            <td><input name="comp2brake" type="text" id="comp2brake" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2brake'] . '"';} ?>></td>
            <td><input name="comp3brake" type="text" id="comp3brake" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3brake'] . '"';} ?>></td>
            <td><input name="comp4brake" type="text" id="comp4brake" class="small" <?php if($formViewer) { echo 'value="' . $row['comp4brake'] . '"';} ?>></td>
            <td><input name="comp5brake" type="text" id="comp5brake" class="small" <?php if($formViewer) { echo 'value="' . $row['comp5brake'] . '"';} ?>></td>
            <td><input name="comp6brake" type="text" id="comp6brake" class="small" <?php if($formViewer) { echo 'value="' . $row['comp6brake'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
    <!- ROW8 --------------------------------------------------------------------->
    <tr>
      <td colspan="3">Vapor Adapter - Brake Interlock Tested </td>
    </tr>
    <!- ROW9 --------------------------------------------------------------------->
    <tr>
      <td colspan="3"><table width="100%" border="0">
          <tr>
            <td>Front</td>
            <td>Middle</td>
            <td>Rear</td>
          </tr>
          <tr>
            <td><input name="comp1vapor" type="text" id="comp1vapor" class="small" <?php if($formViewer) { echo 'value="' . $row['comp1vapor'] . '"';} ?>></td>
            <td><input name="comp2vapor" type="text" id="comp2vapor" class="small" <?php if($formViewer) { echo 'value="' . $row['comp2vapor'] . '"';} ?>></td>
            <td><input name="comp3vapor" type="text" id="comp3vapor" class="small" <?php if($formViewer) { echo 'value="' . $row['comp3vapor'] . '"';} ?>></td>
          </tr>
        </table></td>
    </tr>
    <!-- /.FORM ================================================== -->
    <?php
 require 'signature.php';
?>
<!-- ================================================== -->
<?php
 require 'footer.php';
?>
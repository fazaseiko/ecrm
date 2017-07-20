<!DOCTYPE html>
<html lang="en">
<?php
include 'action/check-login.php';
error_reporting(0);
?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eartistic System | New Patient Invoice</title>
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="../css/theme.css" rel="stylesheet">
        <link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">
		<link rel="icon" href="../images/icon.png">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <?php
include 'header.php';
?>
            </div>
     
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                   <?php
include 'sidemenu.php';
?>         

<?php
		include '../config/db_config.php';
									$username = $_SESSION['username'];
									$id = $_SESSION['id'];
									$id = $_GET['id'];
//$view = "SELECT * from patient where md5(patient_id) = '$id'";	
//$views = "SELECT * FROM sales WHERE md5(patient_id) = '$id'";	
$views = "SELECT * from patient WHERE md5(patient_id) = '$id'";							
									$results = $conn->query($views);
									$rows = $results->fetch_assoc();
?>
<div class="span10">
          <div class="content">
       
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        New Patient Invoice</h3>
                                </div>
								<div class="module-body">
								
<form action="" method="post" name="form1">
<table cellspacing="0" cellpadding="1">
<tbody>
<tr>
<td><strong> Bill to (Name) </strong></td>
<td><input name="invoice_name" size="20" type="text" value="<?php echo $rows['patient_name']; ?>" /></td>
<td><strong> IC </strong></td>
<td><input name="invoice_ic" size="20" type="text" value="<?php echo $rows['patient_ic']; ?>" /></td>
<td><strong> Hospital </strong></td>
<td><input name="invoice_hospital" size="20" type="text" value="<?php echo $rows['patient_hospital']; ?>" /></td>
</tr>
<tr>
<td><strong> Date </strong></td>
<td><input name="invoice_date" required="" size="20" type="date" /></td>
<td><strong> Reference No. </strong></td>
<td><input name="invoice_reference" size="20" type="text" /></td>
<td><strong> Audiologist in Charge </strong></td>
<td><label><select name="invoice_audio" required>
<option value="Dr Shasa Aziz">Dr Shasa Aziz</option>
<option value="Tasnim Hazizan">Tasnim Hazizan</option>
<option value="Afiqah Amirullah">Afiqah Amirullah</option>
<option value="Amar Ruzai">Amar</option>
<option value="Zahidah Zainal">Zahidah Zainal</option>
<option value="Faiz Salleh">Faiz</option>
</select></label></td>
</tr>
<tr>
<td><strong> Terms of Payment </strong></td>
<td><label><select name="invoice_top" required>
<option value="Cash">Cash</option>
<option value="Credit">Credit</option>
</select></label></td>
<td><strong> Payment Detail </strong></td>
<td><label><select name="invoice_paydetail" required>
<option value="Deposit">DEPOSIT</option>
<option value="Full">FULL</option>
</select></label></td>
</tr>
<tr>
<td><strong> List Product(s): </strong></td>
</tr>
</tbody>
</table>

<table width="634" border="1">
<tbody>
<tr>
<td>No</td>
<td>Description</td>
<td>Quantity</td>
<td>S/N</td>
<td>Unit Price</td>
<td>Total</td>
</tr>
<?php
        $i=1;
        include '../config/db_config.php';
		//$username = $_SESSION['username'];
		//$id = $_SESSION['id'];
		$ids = $_GET['id'];
								 
		//$sql = "SELECT patient.patient_id, patient.patient_name,patient.patient_hospital,sales.product_name,sales.quantity FROM patient INNER JOIN sales ON patient.patient_id=sales.patient_id WHERE md5(patient_id) = '$id'";
		$sql = "SELECT * FROM sales WHERE md5(patient_id) = '$ids'";
        $result = $conn->query($sql);
         while ($row=mysqli_fetch_array($result)) {             
               
        ?>
                                    
        <tr align="left">
            
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['serial_number']; ?></td>
            <td><input name="data1[invoice_price]" type="text"/></td>
            <td><input name="data2[invoice_total]" type="text"/></td>
            
            </td>
            </tr>

                                            
      <?php } ?>
</tbody>
</table>
<table cellspacing="0" cellpadding="1">
<tbody>
<tr>
<td><strong> Other: </strong></td>
</tr>
<tr>
<td><strong> Accessories </strong></td>
<td><textarea cols="40" form="form1" name="invoice_accessories" rows="5">-Battery
-Battery Tester
-Drying Jar
-Drying Capsules
-Air Puffer
-Cleaning Tools
-Pouch
-User Guide</textarea></td>
</tr>
<tr>
<td><strong> SubTotal </strong></td>
<td><input name="invoice_subtotal" required="" size="20" type="text" /></td>
</tr>
<tr>
<td><input name="save" type="submit" value="Add" /></td>
</tr>
</tbody>
</table>

</form>

							  </div>
                            </div>
                       
        </div>
                 
                    </div>
    
                </div>
            </div>
   
        </div>

        <div class="footer">
		<div class="container">
			<b class="copyright">&copy; <?php echo date('Y') ?> Eartistic System - Developed by <a target="_blank" href="https://www.facebook.com/faizsupian">Faiz Supian</a> and  <a target="_blank" href="https://www.facebook.com/muhammadanuarr">Muhammad Anuar</a></b> All rights reserved.
		</div>
	</div>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
    </body>
    
    <?php

if(isset($_POST['save'])){
  $invoice_name = $_POST['invoice_name'];
  $invoice_ic = $_POST['invoice_ic'];
  $invoice_hospital = $_POST['invoice_hospital'];
  $invoice_date = $_POST['invoice_date'];
  $invoice_reference = $_POST['invoice_reference'];
  $invoice_audio = $_POST['invoice_audio'];
  $invoice_top = $_POST['invoice_top'];
  $invoice_paydetail = $_POST['invoice_paydetail'];
  $invoice_description = $_POST['invoice_description'];
  $invoice_quantity = $_POST['invoice_quantity'];
  $invoice_sn = $_POST['invoice_sn'];
  $invoice_price = $_POST['data1[invoice_price]'];
  $invoice_total = $_POST['data2[invoice_total]'];
  $invoice_accessories = $_POST['invoice_accessories'];
  
  $sql = "INSERT INTO invoice_patient (invoice_name, invoice_ic, invoice_hospital, invoice_date, invoice_reference,   invoice_audio, invoice_top, invoice_paydetail, invoice_description, invoice_quantity, invoice_sn, invoice_price, invoice_total, invoice_accessories)
      VALUES
      ('$invoice_name', '$invoice_ic', '$invoice_hospital', '$invoice_date', '$invoice_reference', '$invoice_audio', '$invoice_top', '$invoice_paydetail', '$invoice_description', '$invoice_quantity', '$invoice_sn', '$invoice_price', '$invoice_total', '$invoice_accessories' )";
    

  $result = mysqli_query($conn,$sql);

  if($result){
    echo "<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Data has been succesfully saved!')
            window.location.href='list_invoice_patient.php';
            </SCRIPT>";
  }
  else {
    echo "<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Data NOT succesfully saved!')
            window.location.href='add_invoice_patient.php';
            </SCRIPT>";
  }
}

?>

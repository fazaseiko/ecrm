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
        <title>Eartistic System | New Impression</title>
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
									$view = "SELECT * from patient where md5(patient_id) = '$id'";
									$result = $conn->query($view);
									$row = $result->fetch_assoc();
?>
            
                    <div class="span9">
                        <div class="content">

       
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        New Patient Invoice</h3>
                                </div>
								<div class="module-body">
								<?php
								if(isset($_GET['in'])) {
									print '
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['in'].' 
									</div>
									';
								}else{
								}
								?>
                                 <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" >
  <table cellpadding="3" cellspacing="0">
   
    <tr>
      <td><strong>Bill to (Name)</strong></td>
      <td><input name="invoice_name" value="<?php echo $row['patient_name']; ?>"    />
<td><strong>Bill to (IC)</strong></td>
      <td><input name="invoice_ic" value="<?php echo $row['patient_ic']; ?>"    />
      <td><strong>Bill to (Hospital)</strong></td>
      <td><input name="invoice_hospital" value="<?php echo $row['patient_hospital']; ?>"/>
</td>

</tr>
<tr>
<td><strong>Date</strong></td>
      <td><input name="invoice_date" type="date" size="20" required/></td>

<td><strong>Reference No.</strong></td>
      <td><input name="invoice_reference" type="text" size="20"/></td>

    
      <td><strong>Audiologist in Charge</strong></td>
      <td><label><select name="invoice_audio" required> 
        <option value="" selected="selected" ></option>
        <option value="Dr Shasa Aziz" >Dr Shasa Aziz </option>
        <option value="Tasnim Hazizan" >Tasnim Hazizan</option>
        <option value="Afiqah Amirullah" >Afiqah Amirullah</option>
        <option value="Amar Ruzai" >Amar</option>
        <option value="Zahidah Zainal" >Zahidah Zainal</option>
        <option value="Faiz Salleh" >Faiz</option>
      </select></label></td>
 </tr>
      <tr>
      <td><strong>Terms of Payment</strong></td>
      <td><label><select name="invoice_top" required> 
        <option value="" selected="selected" ></option>
        <option value="Cash" >Cash</option>
        <option value="Credit">Credit</option>
        </select></label></td>
           <br>

<td><strong>Payment Detail</strong></td>
      <td><label><select name="invoice_paydetail" required> 
        <option value="" selected="selected" ></option>
        <option value="Deposit" >DEPOSIT</option>
        <option value="Full" >FULL</option>
        </select></label></td>

           <td><strong>Description</strong></td>
      <td><label><select name="invoice_description" required> 
        <option value="" selected="selected" ></option>
        <option value="SONIC PEP 20 BTE" >SONIC PEP 20 BTE</option>
        <option value="SONIC PEP 20 BTEP" >SONIC PEP 20 BTEP</option>
        </select></label></td>



</tr>

<tr>

<td><strong>Quantity</strong></td>
      <td><input name="invoice_quantity" type="number" size="10" required/></td>


<td><strong>S/N</strong></td>
      <td><input name="invoice_sn" type="text" size="20" required/></td>

      <td><strong>Unit Price</strong></td>
      <td><input name="invoice_price" type="text" size="20" required/></td>

      </tr>

<tr>

<td><strong>Total</strong></td>
      <td><input name="invoice_total" type="text" size="20" required/></td>

<td><strong>Accessories</strong></td>
      <td><label><select name="invoice_accessories" required> 
        <option value="" selected="selected" ></option>
        <option value="MNR" >MNR</option>
        <option value="BTE" >BTE</option>
        <option value="CUSTOM" >CUSTOM</option>
        </select></label></td>



      
        

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="save" id="submit" value="Add"  style="cursor:pointer" /></td>
    </tr>
  </table>

  <br>
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
  $invoice_price = $_POST['invoice_price'];
  $invoice_total = $_POST['invoice_total'];
  $invoice_accessories = $_POST['invoice_accessories'];
  
  $sql = "INSERT INTO invoice (invoice_name, invoice_ic, invoice_hospital, invoice_date, invoice_reference,   invoice_audio, invoice_top, invoice_paydetail, invoice_description, invoice_quantity, invoice_sn, invoice_price, invoice_total, invoice_accessories)
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

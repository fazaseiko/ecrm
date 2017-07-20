<!DOCTYPE html>
<html lang="en">
<?php
include 'action/check-login.php';
include '../config/db_config.php';
error_reporting(0);

?>

<?php
include '../config/db_config.php';

$id = $_GET['id'];
$view = "SELECT * from patient where patient_id = '$id'";
$result = $conn->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

  $ID = $_GET['id'];

  $patient_name = $_POST['patient_name'];
  $patient_ic = $_POST['patient_ic'];
  $patient_hospital = $_POST['patient_hospital'];
  
  $insert = "UPDATE patient set patient_name = '$patient_name', patient_ic = '$patient_ic', patient_hospital = '$patient_hospital' where patient_id = '$id'";
  
  if($conn->query($insert)== TRUE){

      echo "<SCRIPT LANGUAGE='JavaScript'>
      window.location.href='list_patient.php';
            window.alert('Data has been succesfully saved!')
            </SCRIPT>";     
  }else{

    echo "Ooppss cannot add data" . $conn->error;
    header('location:edit_patient.php');
  }
  $conn->close();
}
?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eartistic System | Edit Patient</title>
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
            
                    <div class="span9">
                        <div class="content">

       
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Edit Patient</h3>
                                </div>
								<div class="module-body">
	
                                 <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" >
  <table width="90%" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td><strong>Name</strong></td>
      <td><label></label>
        <span id="sprytextfield1">
        <input type="text" name="patient_name" id="surname" size="17" value="<?php echo $row['patient_name'];?>"></span>
      </tr>
      <tr>
      <td><strong>IC </strong></td>
      <td><label></label>
      <span id="sprytextfield6">
      <input name="patient_ic" type="text" id="email" size="30"  value="<?php echo $row['patient_ic'];?>"/></span></td> 
    </tr>
    <tr>
      <td><strong>Hospital </strong></td>
      <td><label></label>
      <span id="sprytextfield6">
      <input name="patient_hospital" type="text" id="email" size="30"  value="<?php echo $row['patient_hospital'];?>"/></span></td> 
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="update" id="submit" value="Update"  style="cursor:pointer" />
        <input type="reset" name="reset" id="reset" value="Reset" style="cursor:pointer" /></td>
    </tr>
  </table>
</form>
									</div>
                            </div>

                       
                        </div>
                 
                    </div>
    
                </div>
            </div>
   
        </div>

        <?php
include 'footer.php';
?>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
    </body>

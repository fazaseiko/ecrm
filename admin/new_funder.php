<!DOCTYPE html>
<html lang="en">
<?php
include 'action/check-login.php';
error_reporting(0);
?>
<?php 
include '../config/db_config.php';
$id = $_SESSION['id'];
?>

<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eartistic System| New Funder</title>
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
                                        New Funder</h3>
                                </div>
								<div class="module-body">
								<?php
							
								if (isset($_SESSION['newmwmber']) && $_SESSION['newmwmber'] == true) {
	                             $susername = $_SESSION['susername'];
								 $spassword = $_SESSION['suserpaa'];
								 print '
									
									';
                                 }else{
                            
                                  }
								  
								if(isset($_GET['in'])) {
									print '
									<div class="alert alert-success">
										<button type="button" class="close" >×</button>
										'.$_GET['in'].' 
									</div>
									';
								}else{
									
								}
								?>
                                 <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" >
  <table cellpadding="3" cellspacing="0">
   
   <tr>
      <td><strong>Name</strong></td>
      <td>
      
        <input type="text" name="name" id="surname" size="17" required>
      
      </td>
      </tr>

      <tr>
      <td><strong>Address 1</strong></td>
      <td><label></label>
      
      <input name="address1" type="text" id="email" size="30" required></td> 
    </tr>
    <tr>
      <td><strong>Address 2</strong></td>
      <td><label></label>
      
      <input name="address2" type="text" id="email" size="30" ></td> 
    </tr>
    <tr>
      <td><strong>Address 3</strong></td>
      <td><label></label>
      
      <input name="address3" type="text" id="email" size="30" ></td> 
    </tr>
    
           <br>
        

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="save" id="submit" value="Add"  style="cursor:pointer" />
        <input type="reset" name="reset" id="reset" value="Reset" style="cursor:pointer" /></td>
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
    
    <?php

if(isset($_POST['save'])){
  $name = $_POST['name'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $address3 = $_POST['address3'];
  
  $sql = "INSERT INTO funder (funder_name, funder_address1, funder_address2, funder_address3)
      VALUES
      ('$name','$address1','$address2','$address3')";
    

  $result = mysqli_query($conn,$sql);

  if($result){
    echo "<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Data has been succesfully saved!')
            window.location.href='new_invoice_funder.php';
            </SCRIPT>";
  }
  else {
    echo "<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Data NOT succesfully saved!')
            window.location.href='new_funder.php';
            </SCRIPT>";
  }
}

?>

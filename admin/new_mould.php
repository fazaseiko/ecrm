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
            
                    <div class="span9">
                         <div>

       
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        New Repair</h3>
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
                                 <form action="action/new-stock.php" method="POST">
										<div >
                                        <span>
										<label >Name</label>										  
										<input type="date" placeholder="Date..." name="date" required>
										</span>
                                         <span>
                                            <label >Name</label>										  
											<input type="date" laceholder="Date..." name="date" required>												
										</span>
                                            
                                            
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Item Description</label>
											<div class="controls">
												<input type="text" placeholder="Product Name" name="itemdescription" required class="span8 tip">
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Quantity</label>
											<div class="controls">
												<input type="number" placeholder="Opening Stock…" name="stock" required class="span8 tip">
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Serial No.</label>
											<div class="controls">
												<input type="text" placeholder="Serial No…" name="barcode" required class="span8 tip">
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Person In Charge</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." name="personincharge" class="span8">
													<option value="">Select one..</option>
													<?php
													include '../config/db_config.php';
													$sql = "SELECT * FROM person_in_charge WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {

                                                    while($row = $result->fetch_assoc()) {
                                                     print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                       }
                                                     } else {

                                                     }
                                                     $conn->close();
													?>
												</select>
											</div>
										</div>
                                        
                                        <div class="control-group">
										  <label class="control-label" for="basicinput2">Time</label>
										  <div class="controls">
												<input type="time" id="basicinput" placeholder="Time..." name="time" required class="span8">
												
											</div>
										</div>

										<?php /*?><div class="control-group">
											<label class="control-label" for="basicinput">Buying Price</label>
											<div class="controls">
												<div class="input-append">
													<input type="number" placeholder="Buying Price" name="buyingprice" required class="span8"><span class="add-on"><?php echo"$SEshopcurrency"; ?></span>
				                                 
												</div>

											</div>
										</div>
										
																				<div class="control-group">
											<label class="control-label" for="basicinput">Selling Price</label>
											<div class="controls">
												<div class="input-append">
													<input type="number" placeholder="Selling Price" name="sellingprice"  required class="span8"><span class="add-on"><?php echo"$SEshopcurrency"; ?></span>
				                                 
												</div>

											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Low stock level</label>
											<div class="controls">
												<input type="number" id="basicinput" placeholder="Low stock level..." name="stocklevel" required class="span8">
												
											</div>
										</div>																			
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Product Unit</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." name="productunit" required class="span8">
													<option value="">Select one..</option>
                                                     <?php
													include '../config/db_config.php';
													$sql = "SELECT * FROM product_units WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {

                                                    while($row = $result->fetch_assoc()) {
                                                     print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                       }
                                                     } else {

                                                     }
                                                     $conn->close();
													?>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Expire Date</label>
											<div class="controls">
												  <select tabindex="1" data-placeholder="Select here.." name="date" required class="span2">
													<option value="">Date</option>
													<?php 
                                                    $x = 1; 

                                                    while($x <= 31) {
                                         
												     if ($x < 10) {
														   $x = "0$x";
													 print '<option value="'.$x.'">'.$x.'</option>';
													   }else{
													 print '<option value="'.$x.'">'.$x.'</option>';
													   }
                                                    $x++;
                                                      } 
                                                        ?>
													</select>
													
													<select tabindex="1" data-placeholder="Select here.." name="month" required class="span2">
													<option value="">Month</option>
													<?php 
                                                    $x = 1; 

                                                    while($x <= 12) {
                                                       if ($x < 10) {
														   $x = "0$x";
													 print '<option value="'.$x.'">'.$x.'</option>';
													   }else{
													 print '<option value="'.$x.'">'.$x.'</option>';
													   }
													   
                                                    $x++;
                                                      } 
                                                        ?>
													</select>
													
													<select tabindex="1" data-placeholder="Select here.." name="year" class="span2">
													<option value="">Year</option>
													<?php 
                                                    $x = date('Y'); 
                                                    $yr = 20;
													$y2 = $x + $yr;
                                                    while($x <= $y2) {
                                         
													 print '<option value="'.$x.'">'.$x.'</option>';
                                                    $x++;
                                                      } 
                                                        ?>
													</select>
											</div>
										</div><?php */?>
										

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Add Stock</button>
												<button type="reset" class="btn">Reset Form</button>
											</div>
										</div>
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

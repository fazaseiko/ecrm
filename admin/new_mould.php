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
                        <div class="content">

       
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        New Impression</h3>
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
                                 <form class="form-horizontal row-fluid" action="action/new-stock.php" method="POST">
										<div class="control-group">
										  <label class="control-label" for="basicinput2">DATE</label>
										  <div class="controls">
												<input type="date" id="basicinput" placeholder="Date..." name="categories_date" required class="span8">
												
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">NAME</label>
											<div class="controls">
												<input type="text" placeholder="Full Name" name="categories_name" required class="span8 tip">
											</div>
                                            
                                            <label class="control-label" for="basicinput">I/C NO</label>
											<div class="controls">
												<input type="text" placeholder="IC Number" name="categories_ic" required class="span8 tip">
											</div>
                                            
										</div>
                                        
                                        <div class="control-group">
											
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">HOSPITAL</label>
											<div class="controls">
												<input type="text" placeholder="Hospital" name="categories_hospital" required class="span8 tip">
											</div>
										</div>
                                        
                                        <div class="control-group">
										  <label class="control-label" for="basicinput2">AUDIOLOGIST IN CHARGE</label>
										  <div class="controls">
											<select name="categories_audiologist" > 
        										<option value="" selected="selected" ></option>
        										<option value="Dr Shasa Aziz" >Dr Shasa Aziz </option>
        										<option value="Tasnim Hazizan" >Tasnim Hazizan</option>
        										<option value="Afiqah Amirullah" >Afiqah Amirullah</option>
        										<option value="Amar Ruzai" >Amar</option>
        										<option value="Zahidah Zainal" >Zahidah Zainal</option>
        										<option value="Faiz Salleh" >Faiz</option>
      											</select>
											</div>
										</div>																			

										<div class="control-group">
											<label class="control-label" for="basicinput">REQUIRED DATE</label>
											<div class="controls">
												<input type="text" placeholder="Required Date" name="categories_requireddate" required class="span8 tip">
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">SOFT LEFT STYLE</label>
										  <div class="controls">
											<select name="categories_soft_left_style" > 
        										<option value="" selected="selected" ></option>
        										<option value="FULL SHELL CARVED" >FULL SHELL CARVED</option>
        										<option value="HALF SHELL CARVED CANAL" >HALF SHELL CARVED CANAL</option>
        										<option value="FULL SHELL (HIGH POWERED)" >FULL SHELL (HIGH POWERED)</option>
        										<option value="FULL SHELL (PEADIATRIC, DOUBLE DIP)" >FULL SHELL (PEADIATRIC, DOUBLE DIP)</option>
      											</select>
											</div>
										</div>		

										<div class="control-group">
										  <label class="control-label" for="basicinput2">SOFT LEFT TUBING</label>
										  <div class="controls">
											<select name="categories_soft_left_tubing" > 
        										<option value="" selected="selected" ></option>
        										<option value="STANDARD WITHOUT LOCK" >STANDARD WITHOUT LOCK</option>
        										</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">SOFT LEFT VENT</label>
										  <div class="controls">
											<select name="categories_soft_left_vent" > 
        										<option value="" selected="selected" ></option>
        										<option value="NO VENT" >NO VENT</option>
        										<option value="0.8 mm" >0.8 mm</option>
        										<option value="1.0 mm" >1.0 mm</option>
        										<option value="1.4 mm" >1.4 mm</option>
        										<option value="2.0 mm" >2.0 mm</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">SOFT RIGHT STYLE</label>
										  <div class="controls">
											<select name="categories_soft_right_style" > 
        										<option value="" selected="selected" ></option>
        										<option value="FULL SHELL CARVED" >FULL SHELL CARVED</option>
        										<option value="HALF SHELL CARVED CANAL" >HALF SHELL CARVED CANAL</option>
        										<option value="FULL SHELL (HIGH POWERED)" >FULL SHELL (HIGH POWERED)</option>
        										<option value="FULL SHELL (PEADIATRIC, DOUBLE DIP)" >FULL SHELL (PEADIATRIC, DOUBLE DIP)</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">SOFT RIGHT TUBING</label>
										  <div class="controls">
											<select name="categories_soft_right_tubing" > 
        										<option value="" selected="selected" ></option>
        										<option value="STANDARD WITHOUT LOCK" >STANDARD WITHOUT LOCK</option>
        										</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">SOFT RIGHT VENT</label>
										  <div class="controls">
											<select name="categories_soft_right_vent" > 
        										<option value="" selected="selected" ></option>
        										<option value="NO VENT" >NO VENT</option>
        										<option value="0.8 mm" >0.8 mm</option>
        										<option value="1.0 mm" >1.0 mm</option>
        										<option value="1.4 mm" >1.4 mm</option>
        										<option value="2.0 mm" >2.0 mm</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD LEFT STYLE</label>
										  <div class="controls">
											<select name="categories_hard_left_style" > 
        										<option value="" selected="selected" ></option>
        										<option value="FULL SHELL CARVED" >FULL SHELL CARVED</option>
        										<option value="HALF SHELL CARVED CANAL" >HALF SHELL CARVED CANAL</option>
        										<option value="CANAL" >CANAL</option>
        										<option value="CANAL LOCK" >CANAL LOCK</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD LEFT TUBING</label>
										  <div class="controls">
											<select name="categories_hard_right_tubing" > 
        										<option value="" selected="selected" ></option>
        										<option value="STANDARD WITHOUT LOCK" >STANDARD WITHOUT LOCK</option>
        										</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD LEFT VENT</label>
										  <div class="controls">
											<select name="categories_hard_left_vent" > 
        										<option value="" selected="selected" ></option>
        										<option value="NO VENT" >NO VENT</option>
        										<option value="0.8 mm" >0.8 mm</option>
        										<option value="1.0 mm" >1.0 mm</option>
        										<option value="1.4 mm" >1.4 mm</option>
        										<option value="2.0 mm" >2.0 mm</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD LEFT OTHER OPTIONS</label>
										  <div class="controls">
											<select name="categories_hard_left_other" > 
        										<option value="" selected="selected" ></option>
        										<option value="PULL OUT STRING" >PULL OUT STRING</option>
        										</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD RIGHT STYLE</label>
										  <div class="controls">
											<select name="categories_hard_right_style" > 
        										<option value="" selected="selected" ></option>
        										<option value="FULL SHELL CARVED" >FULL SHELL CARVED</option>
        										<option value="HALF SHELL CARVED CANAL" >HALF SHELL CARVED CANAL</option>
        										<option value="CANAL" >CANAL</option>
        										<option value="CANAL LOCK" >CANAL LOCK</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD RIGHT TUBING</label>
										  <div class="controls">
											<select name="categories_hard_right_tubing" > 
        										<option value="" selected="selected" ></option>
        										<option value="STANDARD WITHOUT LOCK" >STANDARD WITHOUT LOCK</option>
        										</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD RIGHT VENT</label>
										  <div class="controls">
											<select name="categories_hard_right_vent"> 
        										<option value="" selected="selected" ></option>
        										<option value="NO VENT" >NO VENT</option>
        										<option value="0.8 mm" >0.8 mm</option>
        										<option value="1.0 mm" >1.0 mm</option>
        										<option value="1.4 mm" >1.4 mm</option>
        										<option value="2.0 mm" >2.0 mm</option>
      											</select>
											</div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="basicinput2">HARD RIGHT OTHER OPTIONS</label>
										  <div class="controls">
											<select name="categories_hard_right_other" > 
        										<option value="" selected="selected" ></option>
        										<option value="PULL OUT STRING" >PULL OUT STRING</option>
        										</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">OTHER REMARKS</label>
											<div class="controls">
												<input type="text" placeholder="Remarks" name="categories_other" required class="span8 tip">
											</div>
										</div>

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

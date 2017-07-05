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
        <title>Eartistic System| New Staff</title>
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
                                        New User</h3>
                                </div>
								<div class="module-body">
								<?php
							
								if (isset($_SESSION['newmwmber']) && $_SESSION['newmwmber'] == true) {
	                             $susername = $_SESSION['susername'];
								 $spassword = $_SESSION['suserpaa'];
								 print '
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										Registration completed, Username = <strong>'.$susername.' </strong> and password = <strong>'.base64_decode("$spassword").' </strong>
									</div>
									';
                                 }else{
                            
                                  }
								  
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
                                 <form class="form-horizontal row-fluid" action="action/new-user.php" method="POST">
										<div class="control-group">
											<label class="control-label" for="basicinput">Full Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Full Name..." name="fullname" required class="span8">
												
											</div>
										</div>


										
																				<div class="control-group">
											<label class="control-label" for="basicinput">Email Address</label>
											<div class="controls">
												<input type="email" placeholder="Email Address…" name="email" required class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Gender</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." name="gender" class="span8">
													<option value="">Select one..</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Phone Number</label>
											<div class="controls">
												<input type="text" placeholder="Phone Number…" name="phone" required class="span8 tip">
											</div>
										</div>

			
										

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Add User</button>
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

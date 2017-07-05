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
        <title>Eartistic System | My Patients</title>
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
                                        Registered Patients</h3>
                                </div>
                                <div class="module-body table">
                                 <?php
								 include '../config/db_config.php';
								 
								 $sql = "SELECT * FROM patients WHERE shop = '$SEshopno'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
									  <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <!--<th>
                                                    User ID
                                                </th>-->
                                                <th>
                                                    Full Name
                                                </th>
                                                <th>
                                                    Hospital/Walk in
                                                </th>
                                                <th>
                                                    Gender
                                                </th>
												<th>
                                                    Phone
                                                </th>
												<th>
                                                   Result
                                                </th>
                                                <th>
                                                    Option
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
									  $scanned = $row['scanned'];
                               print '<tr class="odd gradeX">
                                                <!--<td>
                                                    '.$row['patient_id'].'
                                                </td>-->
                                                <td>
                                                    '.$row['fullname'].'
                                                </td>
                                                <td>
                                                    '.$row['hospital'].'
                                                </td>
                                                <td class="center">
                                                    '.$row['gender'] .'
                                                </td>
												<td>
                                                    '.$row['ic'].'
                                                </td>
												<td>';
												if ($scanned == null){
												print'<img src="../images/'.$row['gender'].'.png" width="60">';
												}else{
												print'<img src="data:image/png;base64,'.base64_encode($scanned).'">';
												}
                                                print '
                                                </td>
                                                <td class="center">
                                               <div class="control-group">
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="action/editpatient_send.php?ref='.$row['patient_id'].'">Edit User</a></li>
														<li><a '; ?> onclick="return confirm('Are you sure you want to delete user <?php echo $row['fullname']; ?> ?')" <?php print 'href="action/delete_patient.php?ref='.$row['patient_id'].'">Delete User</a></li>
													</ul>
												</div>
											</div>
										</div>
                                                </td>
                                            </tr>';
                                    }
                                    } else {
                                     print '
									<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:green">No User Found!</h3>
										All registered users will be shown here.
									</div>
									</div>';
                                       }
									   
									   print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
								 ?>
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

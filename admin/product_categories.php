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
        <title>Eartistic System | Person In Charge</title>
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
                                        Add New Person In Charge </h3>
										
                                </div>
                                <div class="module-body">
								<form action="action/new-category.php" method="POST">
								<div class="controls">
												<input type="text" id="basicinput" placeholder="Person Name..." name="category" required class="span8"><button type="submit" class="btn">Add Person</button>
									
											</div>
                                 </form>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Person In Charge </h3>
										
                                </div>
                                <div class="module-body table">
								
                                 <?php
								 include '../config/db_config.php';
								 
								 $sql = "SELECT * FROM person_in_charge ORDER BY name";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
									  <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
        
                                                <th>
                                                    Category Name
                                                </th>
                                                 <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
						$pname = $row['name'];
                               print '<tr class="odd gradeX">
                                                <td>
                                                    '.$pname.'
                                                </td>
                                                <td>
                                                <a ';?> onclick="return confirm('Are you sure you want to delete category <?php echo"$pname"; ?> ?');" <?php print 'href="action/delete_category.php?ref='.$pname.'" class="btn btn-small btn-danger">Delete person in charge</a>
                                                </td>
                                               
                                            </tr>';
                                    }
                                    } else {
                                         print '
										 						<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:green">No Person In Charge!</h3>
										All person in charge you register will be shown here.
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

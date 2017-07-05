<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';

?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eartistic System| Dashboard</title>
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
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span6"><i class=" icon-shopping-cart"></i><b><?php echo number_format($mypr1); ?></b>
                                        <p class="text-muted">
                                            Registered Products</p>
                                    </a><a href="#" class="btn-box big span6"><i class="icon-user"></i><b><?php echo number_format($myus1); ?></b>
                                        <p class="text-muted">
                                            Registered Patients</p>
                                    </a><?php /*?><a href="#" class="btn-box big span4"><i class="icon-money"></i><b><?php echo number_format($mysum); ?> <?php echo"$SEshopcurrency"; ?></b>
                                        <p class="text-muted">
                                            Today Profit</p>
                                    </a><?php */?>
                                </div>
                            </div>
       
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Alerts</h3>
                                </div>
								<div class="module-body">
								<?php
								if ($ex1 == true){
                                 print '
								 									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>'.$exalert1.'</strong> product (s) are below the crictical level.
									</div>';
							
								}else{
									if ($ex2 == false) {
																			print '
									 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										All products below the stock level will be shown here.
									</div>';
									}

								}
						
								if ($ex2 == true){
									print '
										<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>'.$exalert2.'</strong> product (s) have expired.
									</div>';
								}else{
									if ($ex1 == false) {
																			print '
									 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										All expired products will be shown here.
									</div>';
									}
								}
								?>

									</div>
                            </div>

							                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Last 3 Registered Product</h3>
                                </div>
                                
                                <div class="module-body table">
                                 <?php
								 include '../config/db_config.php';
								 
								 $sql = "SELECT * FROM products WHERE shop_id = '$SEshopno'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
									  <table border="0" class="table table-striped table-bordered table-condensedy"
                                       >
                                        <thead>
                                            <tr>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Quantity
												</th>
												<th>
                                                    Serial No.
                                                </th>
												<th>
                                                    Person In Charge
                                                </th>
												<th>
                                                    Time
                                                </th>
                                                											
                                            </tr>
                                        </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
									  $exdate = ''.$row['expire_date'].'-'.$row['expire_month'].'-'.$row['expire_year'].'';
                               print '<tr class="odd gradeX">
                                                
                                                <td>
                                                    '.$row['date'].'
                                                </td>
                                                <td>
                                                    '.$row['item_description'].'
                                                </td>
												<td>
                                                    '.$row['open_stock'].'
                                                </td>
												<td>
                                                    '.$row['barcode'].'
                                                </td>
												<td>
                                                    '.$row['person_in_charge'].'
                                                </td>
												<td>
                                                    '.$row['time'].'
                                                </td>                                                
                                                
                                            </tr>';
                                    }
                                    } else {
                                    print '
									<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:green">No Product Found!</h3>
										All products you register will be shown here.
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

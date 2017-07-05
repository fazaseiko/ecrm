<!DOCTYPE html>
<html lang="en">
<?php
include 'action/check-login.php';
error_reporting(0);

include 'action/alerts.php';
?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Manager | Sales Summary</title>
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
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="./"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="new_stock.php"><i class="menu-icon icon-shopping-cart"></i>New Stock </a>
                                </li>
                                <li><a href="stock_list.php"><i class="menu-icon icon-shopping-cart"></i>Stock List</a></li>
                                <li><a href="barcodes.php"><i class="menu-icon icon-barcode"></i>Generate Barcodes</a></li>
                            </ul>
          
                            <ul class="widget widget-menu unstyled">
                                <li><a href="product_categories.php"><i class="menu-icon icon-filter"></i> Product Categories</a></li>
                                <li><a href="product_units.php"><i class="menu-icon icon-glass"></i> Product Units </a></li>
                            </ul>
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="new_user.php"><i class="menu-icon icon-user"></i> New User </a></li>
                                <li><a href="my_users.php"><i class="menu-icon icon-user"></i> Users </a></li>
                            </ul>
							
							<ul class="widget widget-menu unstyled">
                                <li><a href="add_sales.php"><i class="menu-icon icon-money"></i> New Sales</a></li>
                                <li><a href="sales.php"><i class="menu-icon icon-money"></i> Sales </a></li>
								<li><a href="sales_summary.php"><i class="menu-icon icon-bar-chart"></i>Sales Summary</a></li>
                            </ul>

                        </div>
             
                    </div>
            
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Sales Summary as on <?php echo"$todaydate"; ?></h3>
                                </div>
	<div class="module-body">
	<table class="table table-striped table-bordered table-condensed">
								  <tbody>
									<tr>
									  <td><b>Top Selling Product</b></td>
									  <td><?php echo"$pname"; ?></td>
									</tr>
																		<tr>
									  <td><b>Total Income</b></td>
									  <td><?php echo number_format($mysum); ?> <?php echo "$SEshopcurrency"; ?></td>
									</tr>
									

									
								  </tbody>
								</table>
                            </div>

                       </div>
                        </div>
						
						
						                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Sales Summary in general</h3>
                                </div>
	<div class="module-body">
	<table class="table table-striped table-bordered table-condensed">
								  <tbody>
									<tr>
									  <td><b>Top Selling Product</b></td>
									  <td><?php echo"$tpname"; ?></td>
									</tr>
									
									
																											<tr>
									  <td><b>Expected Profit</b></td>
									  <td><?php echo number_format($tincome); ?>  <?php echo "$SEshopcurrency"; ?></td>
									</tr>
									
																											<tr>
									  <td><b>Profit Earned</b></td>
									  <td><?php echo number_format($pen); ?>  <?php echo "$SEshopcurrency"; ?></td>
									</tr>
									
																											<tr>
									  <td><b>Loss</b></td>
									  <td><?php echo number_format($tincome - $pen); ?>  <?php echo "$SEshopcurrency"; ?></td>
									</tr>
								  </tbody>
								</table>
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

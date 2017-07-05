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
        <title>Shop Manager | Add sales</title>
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
                                       Sales</h3>
                                </div>
						                                <div class="module-body table">
                                 <?php
								 include '../config/db_config.php';
								 
								 $sql = "SELECT * FROM sales WHERE shop = '$SEshopno'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
									  <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Sales ID
                                                </th>
                                                <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
												<th>
                                                    Total
                                                </th>
												<th>
                                                    Date
                                                </th>
                                                <th>
                                                    Option
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
									
                               print '<tr class="odd gradeX">
                                                <td>
                                                    '.$row['oid'].'
                                                </td>
                                                <td>
                                                    '.$row['product_name'].'
                                                </td>
                                                <td>
                                                    '.number_format($row['price']).' '.$SEshopcurrency.'
                                                </td>
                                                <td class="center">
                                                   '.$row['amount'].' '.$row['unit'].'
                                                </td>
												<td>
                                                   '.number_format($row['total']).' '.$SEshopcurrency.'
                                                </td>
												<td>
                                                  '.$row['date'].'
                                                </td>
                                                <td class="center">
                                                <a href="action/delete-sales.php?ref='.$row['sales_id'].'&sh='.$row['shop'].'&am='.$row['amount'].'&pr='.$row['product_name'].'" ';?> onclick="return confirm('Are you sure you want to delete sales <?php echo $row['product_name']; ?> ?')" <?php print ' class="btn btn-small btn-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                    } else {
                                    print '
									<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:green">No Sales Found!</h3>
										All products sold on your shop will be shown here.
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

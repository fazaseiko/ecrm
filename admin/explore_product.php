<!DOCTYPE html>
<html lang="en">
<?php
include 'action/check-login.php';
error_reporting(0);
$currentproduct = $_SESSION['exploreprod'];
include '../config/db_config.php';

$sql = "SELECT * FROM products WHERE product_id = '$currentproduct'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $pname = $row['name'];
	  $pbp = $row['buying_price'];
	  $psp = $row['selling_price'];
	  $psl = $row['stock_level'];
	  $pos = $row['open_stock'];
	  $pcs = $row['current_stock'];
	  $pbc = $row['barcode'];
	  $pct = $row['category'];
	  $pu = $row['unit'];
	  $exd = $row['expire_date'];
	  $exm = $row['expire_month'];
	  $exy = $row['expire_year'];
	  $pexd = "$exd-$exm-$exy";
	  
	  
	  $exprofit = $pos * $psp;
	  $tgs = $pos - $pcs;
	  $profitearned = $tgs * $psp;
	  $loss = $pcs * $psp;
    }
} else {

}
$conn->close();
?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eartistic System | Explore Product</title>
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
                                        Explore Product</h3>
                                </div>
                                <div class="module-body">
                           <table class="table table-striped table-bordered table-condensed">
	
								  <tbody>
									<tr>
									  <td><b>Product ID</b></td>
									  <td><?php echo"$currentproduct"; ?></td>
									</tr>
																		<tr>
									  <td><b>Product Name</b></td>
									  <td><?php echo"$pname"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Buying Price</b></td>
									  <td><?php echo number_format($pbp); ?> <?php echo"$SEshopcurrency"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Selling Price</b></td>
									  <td><?php echo number_format($psp); ?> <?php echo"$SEshopcurrency"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Low Stock Level</b></td>
									  <td><?php echo number_format($psl); ?> <?php echo"$pu"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Open Stock</b></td>
									  <td><?php echo"$pos"; ?> <?php echo"$pu"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Current Stock</b></td>
									  <td><?php echo"$pcs"; ?> <?php echo"$pu"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Category</b></td>
									  <td><?php echo"$pct"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Unit</b></td>
									  <td><?php echo"$pu"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Barcode</b></td>
									  <td><?php echo"$pbc"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Expire Date</b></td>
									  <td><?php echo"$pexd"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Expected Profit</b></td>
									  <td><?php echo number_format($exprofit); ?> <?php echo"$SEshopcurrency"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Profit Earned</b></td>
									  <td><?php echo number_format($profitearned); ?> <?php echo"$SEshopcurrency"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Loss</b></td>
									  <td><?php echo number_format($loss); ?> <?php echo"$SEshopcurrency"; ?></td>
									</tr>
									
																		<tr>
									  <td><b>Total Goods Sold</b></td>
									  <td><?php echo number_format($tgs); ?> <?php echo"$pu"; ?></td>
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

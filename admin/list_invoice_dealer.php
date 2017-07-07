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
        <title>Eartistic System | New Invoice</title>
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
                                        List Dealer Invoice</h3>
                                </div>
								<div class="module-body">
								<tr>    
    
                  <td width="29%">Select:</td>
                  <td width="71%"><label for="select"></label>
                    <span id="spryselect1">
                    <select name="forma" onchange="location = this.options[this.selectedIndex].value;">
                      <option value="list_invoice_dealer.php">Dealer</option>
                      <option value="list_invoice_funder.php">Funder</option>
                      <option value="list_invoice_patient.php">Patient</option>
                    </select>
                  </span></td>
                </tr>
    <form action="" method="post">
    <br>
    <div id="scroll">
    <table bgcolor="white" width="100%" align="center" border="1" cellpadding="5" cellspacing="0" class="example table-autosort:0 table-stripeclass:alternate" >
        <thead>     
                <tr>                   
                     <th class='table-sortable:numeric table-sortable table-sorted-asc' width='10' style="cursor:pointer">No</th>
                     <th class='table-sortable:numeric table-sortable table-sorted-asc' width='50' style="cursor:pointer">Dealer</th>
                 <th width="100" class='table-sortable:default table-sortable' style="cursor:pointer">Address</th>       
                 <th width="10" class='table-sortable:default table-sortable' >Actions</th>                         
            </tr>
        </thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
        $i=1;
        include '../config/db_config.php';
								 
		$sql = "SELECT * FROM dealer";
        $result = $conn->query($sql);
         while ($row=mysqli_fetch_array($result)) {
              
               
        ?>
                                    
        <tr align="center">
            
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['dealername']; ?></td>
            <td><?php echo $row['dealeraddress']; ?></td>
            <td><a href="invoice.php?id=<?php echo md5($row['id']);?>" target="_blank" > invoice </a> /
            <a href="deliveryorder.php?id=<?php echo md5($row['id']);?>" target="_blank" > delivery order</a> /
            <a href="paymentvoucher.php?id=<?php echo md5($row['id']);?>" target="_blank" > official receipt</a> / 
            <a href="dealerdelete.php?id=<?php echo md5($row['id']);?>" onclick="return confirm('Are you sure you want to delete?')"> delete</a>
            </td>            
            </td>
            </tr>

                                            
      <?php } ?>
</tbody>
         </table>
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

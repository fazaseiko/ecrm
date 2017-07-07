<?php 

include '../config/db_config.php';
								 
		

$id = $_GET['id'];
$view = "SELECT * from invoice where md5(id) = '$id'";
$result = $conn->query($view);
$row = $result->fetch_assoc();

?>

<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="application.js" type="text/javascript" charset="utf-8"></script> 

<script src="scripts/jquery-1.10.2.js"></script>
  <script src="scripts/jquery-ui.js"></script>



<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<br><br>
		<div>
			<p><img src="lugu.png" style="float:left;width:500px;height:120px;">
				<div align="right" style="font-size:14px;color: #43C1C5"><p>EARTISTIC SDN BHD(1083662-D)</p>
				<p>B-G-12, VISTA ALAM,</p>
				<p>NO.3, PRESINT 4.5,</p>
				<p>JALAN IKHTISAS 14/1,</p>
				<p>SEKSYEN 14, 40000,</p>
				<p>SHAH ALAM, SELANGOR.</p>
				<p>+603-5524 6575</p>
				<p>admin@eartistic.com.my</p></div>
			</p>
			</div>
		<article>
			<br><br><br>
			<p align="right" style="font-size: 35">INVOICE</p>
			<br>
			
				<p style="float: left;" >BILL TO:</p>
				<p style="float: right; padding-right: 70 " >Invoice No:</p><br>


				<p style="float: left;" ><?php echo $row['invoice_name']; ?></p>
				<p style="float: right; padding-right: 70 " >INV<?php echo $row['id']; ?></p><br>


				<p  style="float: left;  ">(<?php echo $row['invoice_ic']; ?>)</p>
				
				
			<br><br><br><br><br><br>
			<table class="inventory" >
				<thead>
					<tr style="font-size: 9">
						<th width="40"> DATE</th>
						<th width="50" >REFERENCE NO.</th>
						<th width="80" >AUDIOLOGIST IN CHARGE</th>
						<th width="50" >TERMS OF PAYMENT</th>
						<th width="50" >PAYMENT DETAIL</th>
											</tr>
				</thead>
				<tbody>
					<tr>
						<td><center><?php echo $row['invoice_date']; ?></center></td>
      </div>
						<td><center><?php echo $row['invoice_reference']; ?></center></td>
						<td><center><?php echo $row['invoice_audio']; ?></center></td>
						<td><center><?php echo $row['invoice_top']; ?></center></td>
						<td><center><?php echo $row['invoice_paydetail']; ?></center></td>
											</tr>
				</tbody>
			</table>
			
			<table class="inventory" >
				<thead>
					<tr style="font-size: 9">
						<th width="20"> Item</th>
						<th width="130" >Description</span></th>
						<th width="30" >Quantity</span></th>
						<th width="50" >Unit Price</span></th>
						<th width="50" >Total</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><center>1</center></td>
      </div>
						<td><?php echo $row['invoice_description']; ?></td>
						<td><center><?php echo $row['invoice_quantity']; ?></center></td>
						<td><center><?php echo $row['invoice_price']; ?></center></td>
						<td><center><?php echo $row['invoice_total']; ?></center></td>
						
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			
			<table class="balance">

				<tr>

					<th><span contenteditable>Total</span></th>
					<td><?php echo $row['invoice_total']; ?></td>
				</tr>
				<tr>
					<th><span contenteditable>GST</span></th>
					<td>RM 0.00</td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><?php echo $row['invoice_total']; ?></td>
				</tr>
			</table>
			<p style="float: left; " >PAYMENT INFORMATION:</p><br>
<p style="float: left;" >Bank 			<span style="padding: 0px 0px 0px 100px">: MAYBANK BHD</span></p><br>
<p style="float: left;" >Account Name <span style="padding: 0px 0px 0px 28px">	: EARTISTIC SDN BHD</p><br>
<p style="float: left;" >Account Number <span style="padding: 0px 0px 0px 10px">: 5648 0164 5906</p>
		</article>
		
	

	</body>
</html>

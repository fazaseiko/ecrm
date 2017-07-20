<?php
	include '../config/db_config.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM dealer WHERE dealer_id = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:list_dealer.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>

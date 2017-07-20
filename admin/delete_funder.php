<?php
	include '../config/db_config.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM funder WHERE funder_id = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:list_funder.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>

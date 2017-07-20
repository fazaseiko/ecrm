<?php
	include '../config/db_config.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM patient WHERE patient_id = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:list_patient.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>

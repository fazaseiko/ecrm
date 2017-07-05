<?php
$user = $_GET['ref'];
include '../../config/db_config.php';

$sql = "DELETE FROM patients WHERE patient_id='$user'";

if ($conn->query($sql) === TRUE) {
   header("location:../my_patients.php");
} else {
    header("location:../my_patients.php");
}

$conn->close();

?>
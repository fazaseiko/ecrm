<?php
include 'check-login.php';
$usermail = $_POST['hospital'];
$ic = $_POST['ic'];

include '../../config/db_config.php';

$sql = "SELECT * FROM patients WHERE hospital = '$usermail'";
$result = $conn->query($sql);

if ($result->num_rows < 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../new_patient.php?err=Email address must be unique");
    }
} else {
  include '../../config/db_config.php';
$sql = "SELECT * FROM patients WHERE ic = '$ic'";
$result = $conn->query($sql);

if ($result->num_rows < 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../new_patient.php?err=Phone number must be unique");
    }
} else {
	$fname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$scanned = $_POST['scanned'];
	$patient_id = 'SU-'.$SEshopno. '-'.rand(1000,9999).'';
	$pass = uniqid();
	$encpass = base64_encode("$pass");
  include '../../config/db_config.php';
  
  $sql = "INSERT INTO patients (patient_id, fullname, hospital, gender, ic, scanned, password, shop)
VALUES ('$patient_id', '$fname', '$usermail', '$gender', '$ic', '$scanned', '$encpass', '$SEshopno')";

if ($conn->query($sql) === TRUE) {
	            session_start();
				$_SESSION['newmwmber'] = true;
			$_SESSION['susername'] = $patient_id;
			$_SESSION['suserpaa'] = $encpass;
  header("location:../my_patients.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


}

?>
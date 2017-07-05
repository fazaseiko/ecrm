<?php
include 'check-login.php';
$usermail = $_POST['hospital'];
$ic = $_POST['ic'];

$usertoedit = $_SESSION['usertoedit'];
include '../../config/db_config.php';

$sql = "SELECT * FROM patients WHERE hospital = '$usermail' and patient_id != '$usertoedit'";
$result = $conn->query($sql);

if ($result->num_rows < 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../edit_patient.php?err=Email address must be unique");
    }
} else {
  include '../../config/db_config.php';
$sql = "SELECT * FROM patients WHERE ic = '$ic' and patient_id != '$usertoedit'";
$result = $conn->query($sql);

if ($result->num_rows < 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../edit_patient.php?err=ic number must be unique");
    }
} else {
	$fname = $_POST['fullname'];
	$gender = $_POST['gender'];
  include '../../config/db_config.php';
  
$sql = "UPDATE patients SET fullname ='$fname', hospital = '$usermail', gender = '$gender', ic = '$ic' WHERE patient_id ='$usertoedit'";

if ($conn->query($sql) === TRUE) {
    header("location:../my_patients.php");
} else {
    header("location:../my_patients.php");
}

}


}

?>
 <?php
 include '../connect/dbconn.php';
// Create connection
 if(isset($_POST['patient_id'])&&isset($_POST['status'])&&isset($_POST['app_date'])&&isset($_POST['app_time'])&&isset($_POST['doctor_id']))
     {
      $a = $_POST['patient_id'];
	  $b = $_POST['status'];
	  $c = $_POST['app_date'];
	  $d = $_POST['app_time'];
	  $e = $_POST['doctor_id'];
	  

      $sql = "INSERT INTO appointment (patient_id,status,app_date,app_time,doctor_id) VALUES ('$a','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
    echo "TRUE";
} else {
    echo "FALSE" ;
}

}
?>
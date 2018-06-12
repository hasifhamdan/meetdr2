               <?php
 include '../connect/dbconn.php';
// Create connection
 if(isset($_POST['patientID'])&&isset($_POST['status'])&&isset($_POST['t_start'])&&isset($_POST['t_end'])&&isset($_POST['OPdate']))
     {
      $a = $_POST['patientID'];
	  $b = $_POST['status'];
	  $c = $_POST['t_start'];
	  $d = $_POST['t_end'];
	  $e = $_POST['OPdate'];
	 

      $sql = "INSERT INTO online_appointment (patient_id,status,t_start,t_end,OPdate) VALUES ('$a','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
    echo "TRUE";
} else {
    echo "FALSE" ;
}

}
?>
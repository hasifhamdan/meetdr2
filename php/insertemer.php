<?php
 include 'connect/dbconn.php';
// Create connection
 if(isset($_POST['patient_id'])&&isset($_POST['emer_date'])&&isset($_POST['status']))
     {
      $a = $_POST['patient_id'];
	  $b = $_POST['emer_date'];
	  $c = $_POST['status'];
	  

      $sql = "INSERT INTO emergency (patient_id,emer_date,status) VALUES ('$a','$b','$c')";

 if ($conn->query($sql) === TRUE) {
	  $select = "SELECT * FROM emergency WHERE patient_id = '$a'";
	  $result=$conn->query($select);
	  while($row=$result->fetch_assoc()){
		  echo $row["emer_id"];
	  }
} else {
    echo "false: " ;
}

}
?>
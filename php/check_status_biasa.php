<?php

 include '../connect/dbconn.php';
// Create connection


 if(isset($_POST['patient_id']))
     {

      $a = $_POST['patient_id'];
      $b = "Hospital Pantai|Ayer Keroh|Melaka|Malaysia";
      $c = "Dr Shahrul";
      $sql = "SELECT * FROM appointment WHERE patient_id = '$a'";
      $result = $conn->query($sql);
      	while($row = $result->fetch_assoc()) {
        if ($result->num_rows > 0) {
        	if( $row["status"] == 1){
        		echo "NULL";
        	}else{
        		 
        		echo  $row["app_time"]. "_" . $row["app_date"]. "_" . $c. "_" . $b ;
        	}
        	}else {
                echo "NULL";
          }

        }
}
?>
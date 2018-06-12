<?php

 include '../connect/dbconn.php';
// Create connection


 if(isset($_POST['patient_id']))
     {

      $a = $_POST['patient_id'];
      $sql = "SELECT * FROM online_appointment WHERE patient_id = '$a'";
      $result = $conn->query($sql);
      	while($row = $result->fetch_assoc()) 
        {
          if ($result->num_rows > 0) 
          {
        	   if( $row["status"] == 4){
        		    echo "NULL";
        	   }else{
        		 
        		    echo  $row["status"]. "_" . $row["om_time"]. "_" . $row["OPDate"]. "_DR sharul_" . $row["OAPP_ID"]. "_" . $row["token"]. "_" . $row["resource_id"];
        	   }
          }else {
                echo "NULL";
          }

        }




}
?>
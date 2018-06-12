<?php

 include '../connect/dbconn.php';
// Create connection


 if(isset($_POST['emer_id']))
     {

      $a = $_POST['emer_id'];
      $sql = "SELECT * FROM emergency WHERE emer_id = '$a'";
      $result = $conn->query($sql);
      	while($row = $result->fetch_assoc()) {
        		 if ($result->num_rows > 0) {
        		  echo  $row["token"]. "_" . $row["resource_id"] ;
            }else{
              echo "NULL";
            }
        	
        	}

        }





?>
<?php

 include '../connect/dbconn.php';

 $meeting_id = $_POST['meeting_id'];
 $doctor_id = $_POST['doctor_id'];


$sql = "UPDATE participant SET participant_status=1 WHERE meeting_id='$meeting_id' AND doctor_id='$doctor_id' ";

if ($conn->query($sql) === TRUE) {
    echo "|SUCCESS|";
     
} else {
    echo "|ERROR|";
}



?>

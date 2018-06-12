 <?php
 include '../connect/dbconn.php';
// Create connection


 if(isset($_POST['OAPP_ID'])&&isset($_POST['status']))
     {
      $a = $_POST['OAPP_ID'];
	  $b = $_POST['status'];

      $sql = "UPDATE online_appointment SET status='$b' WHERE OAPP_ID='$a'";

if ($conn->query($sql) === TRUE) {
    echo "TRUE";
} else {
    echo "FALSE" ;
}

}
?>

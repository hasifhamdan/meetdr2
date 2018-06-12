               <?php
 include 'connect/dbconn.php';
// Create connection
 if(isset($_GET['productID'])&&isset($_GET['qw']))
     {
      $a = $_GET['productID'];
      $b = $_GET['qw'];
             $sql = "INSERT INTO participant (paticipant_id,meeting_id) VALUES ('$a','$b')";

if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "False: " ;
}

}
?>
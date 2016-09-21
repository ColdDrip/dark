<?php

require_once '../handlers/utils.php';

//date_default_timezone_set('Australia/Brisbane');


//POSTING and SELECTING the scanned RFID tag
//$p_RFID = $_POST['gsrdetected']; //get and store from the web address
$p_gsr = $_POST['gsrdetected'];
echo "hello ".$_POST['gsrdetected']." ";


//getting the gsr index for the reading -- will be the highest since it was just created
$sql = "SELECT MAX(gsr_index) FROM records";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$gsr_index = $row[0];


try
{
  $stmt = $db->prepare("INSERT INTO gsr (gsr_index, gsr_reading) VALUES (:gsr_index, :p_gsr)");
  $stmt->execute();

  echo "I pushed to the React database";
}
catch (Exception $e) 
{
  echo "Error: ", $e->getMessage();
}

$db = null;

?>

<?php

require_once '../handlers/utils.php';

$conn = mysqli_connect("localhost", "root", ")otem0N4niDt", "React");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//date_default_timezone_set('Australia/Brisbane');


//POSTING and SELECTING the scanned RFID tag
//$p_RFID = $_POST['gsrdetected']; //get and store from the web address
$p_gsr = $_POST['gsrdetected'];
echo "hello ".$_POST['gsrdetected']." ";

try
{
  $stmt1 = $db->prepare("SELECT MAX(gsr_index) FROM records");
  $stmt1->execute();
  while($row=$stmt1->fetch(PDO::FETCH_OBJ)) {
    echo $row->gsr_index;
    echo "getting the index";
  }
}
catch (PDOException $e)
{
  echo "Error: ", $e->getMessage();
}

//getting the gsr index for the reading -- will be the highest since it was just created
// $sql = "SELECT MAX(gsr_index) FROM records";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_row($result);
// $gsr_index = $row[0];
//
// echo $gsr_index;

try
{
  $stmt = $db->prepare("INSERT INTO gsr (gsr_index, gsr_reading) VALUES (gsr_index, :p_gsr)");
  $stmt->execute();

  echo "I pushed to the React database";
}
catch (Exception $e)
{
  echo "Error: ", $e->getMessage();
}

$db = null;

?>

<?php

require_once '../handlers/utils.php';

$conn = mysqli_connect("localhost", "root", ")otem0N4niDt", "React");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$p_gsr = $_POST['data'];
echo "gsr: ".$p_gsr;

//getting the gsr index for the reading -- will be the highest since it was just created
$sql = "SELECT MAX(gsr_index) FROM records";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$gsr_index = $row[0];


$sql2 = "INSERT INTO gsr (gsr_index, gsr_reading) VALUES ('".$gsr_index."', '".$p_gsr."')";
if(mysqli_query($conn, $sql2)){
    echo "Records added successfully.", $sql2, "something";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);

?>

<?php
$db = new PDO('mysql:host=localhost;dbname=React;charset=utf8',
'root',')otem0N4niDt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRORMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

try
{
	$testresult = $db->query("SELECT * FROM Data");
	echo "Connected to db";
}
catch(PDOException $ex)
{
	echo "an error occured"
	echo $ex->getMessage();
}

?>

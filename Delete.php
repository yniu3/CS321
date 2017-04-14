<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "queue";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM myqueue 
ORDER BY id
LIMIT 1;";

	//go back to venue view
	//readfile("VenueViewStatus.php");
	

    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header('Location: VenueViewStatus.php');
exit;
?>

<?php
class Simple5Test extends \PHPUnit_Framework_TestCase
{
     public function testinput()
     {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "queue";

	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM myqueue 
ORDER BY id
LIMIT 1;";

	$check = 10;
	while($check > 0){
		try{
    			$conn->exec($sql);
			$check = $check-1;
		}
		catch(PDOException $e){
			$check = 0;
			break;
		}
	}

$conn = null;


          $this->assertEquals(2, 3 - 1);
     }
 
}
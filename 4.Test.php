<?php
class Simple3Test extends \PHPUnit_Framework_TestCase
{
     public function testinput()
     {
		$username = "testuser";//$_POST['user'];
		$password = "";//$_POST['pass'];
		$phone = "7";//$_POST['phone'];
		$party = "2";//$_POST['partySize'];
		$notes = "please work";//$_POST['notes'];

		$username = mysql_real_escape_string($username);
		
		$input = "testuser72pleasework";

		mysql_connect("localhost", "root", "");
		mysql_select_db("queue");

		$sql = "
INSERT INTO myqueue (username, password, phone, partySize, notes) VALUES ('$username', '$password', '$phone', '$party', '$notes')";

		$test = mysql_query($sql);

		$servername = "localhost";
           $user = "root";
           $password = "";
           $dbname = "queue";



		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt = $conn->prepare("SELECT username, phone, partysize, notes FROM myqueue");
           $stmt->execute();

// set the resulting array to associative
           $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$check = 0;
           foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    //echo $v;
				//$v
				//$this->assertEquals($v,$username);
				switch($check){
					case 0:
			    			$this->assertEquals($v, $username);	
						$check = $check+1;
						break;
					case 6:
						$this->assertEquals($v, $password);	
						$check = $check+1;
						break;
					case 1:
						$this->assertEquals($v, $phone);	
						$check = $check+1;
						break;
					case 3:
						$this->assertEquals($v, $party);	
						$check = $check+1;
						break;
					case 4:
						$this->assertEquals($v, $notes);	
						$check = $check+1;
						break;
				}
           }
		$sql = "DELETE FROM myqueue 
ORDER BY id
LIMIT 1;";

		$conn->exec($sql);



          //$this->assertEquals(2, 3 - 1);
     }


 
}

class TableRows extends RecursiveIteratorIterator {
                  function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
                  }

                  function current() {
                    return "" . parent::current(). "";
                  }

                  function beginChildren() {
                    //echo "<tr>";
                  }

                  function endChildren() {
                    //echo "</tr>" . "\n";
                  }
                }

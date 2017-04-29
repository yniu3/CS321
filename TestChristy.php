<?php
//namespace stats\Test;

class VenueViewStatusTest extends \PHPUnit_Framework_TestCase
{
  public function testTable(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "queue";
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT username, phone, partysize, notes FROM myqueue");
      $stmt->execute();
      $rows = new TableRows(new RecursiveArrayIterator($stmt->fetchAll()));
      $rows->beginChildren();
      $rows->endChildren()
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $this->expectOutputString("<tr></tr>" . "\n");
  }
  public function testInsertCount(){
    $username = "Christy Kim";//$_POST['user'];
    $password = "password";//$_POST['pass'];
    $phone = "1234567890";//$_POST['phone'];
    $party = "10";//$_POST['partySize'];
    $notes = "notes to be added";//$_POST['notes'];
    $username = mysql_real_escape_string($username);
    mysql_connect("localhost", "root", "");
    mysql_select_db("queue");
    $sql = "INSERT INTO myqueue (username, password, phone, partySize, notes) VALUES ('$username', '$password', '$phone', '$party', '$notes')";
    $this->assertEquals(0, $this->getConnection()->getRowCount('myqueue'));
    mysql_query($sql);
    $this->assertEquals(1, $this->getConnection()->getRowCount('myqueue'));
    $username = "Will Crosswait";
    $sql = "INSERT INTO myqueue (username, password, phone, partySize, notes) VALUES ('$username', '$password', '$phone', '$party', '$notes')";
    mysql_query($sql);
    $this->assertEquals(2, $this->getConnection()->getRowCount('myqueue'));
    $username = "Helena Niu";
    $sql = "INSERT INTO myqueue (username, password, phone, partySize, notes) VALUES ('$username', '$password', '$phone', '$party', '$notes')";
    mysql_query($sql);//3 database
    $this->assertEquals(3, $this->getConnection()->getRowCount('myqueue'));
  }
  public function testDelete(){
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "queue";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username, phone, partysize, notes FROM myqueue");
    $stmt->execute();
    $sql = "DELETE FROM myqueue ORDER BY id LIMIT 1;";
    $this->assertEquals(3, $this->getConnection()->getRowCount('myqueue'));
    $conn->exec($sql);
    $this->assertEquals(2, $this->getConnection()->getRowCount('myqueue'));
    $conn->exec($sql);
    $this->assertEquals(1, $this->getConnection()->getRowCount('myqueue'));
    $conn->exec($sql);
    $this->assertEquals(0, $this->getConnection()->getRowCount('myqueue'));
    $conn->exec($sql);
    $this->assertEquals(0, $this->getConnection()->getRowCount('myqueue'));//shouldn't delete or go down to -1
  }
}

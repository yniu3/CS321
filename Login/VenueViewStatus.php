<!DOCTYPE html>
<html lang="en"><head>
  
  <link rel="stylesheet" type="text/css" href="style.css">

  
  <meta charset="UTF-8">

  
  <meta http-equiv="X-UA-Compatible" content="EI=edge">

  
  <meta name="viewpoint" content="width = device-width, initial-scare =1">
  <title>VenueViewStatus</title>

  
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
  <style>
.jumbotron{
background-color:#2E2D88;
color:black;
text-align: center;
}
/*Adds borders for tabs*/
.tab-content{
border-left: 1px solid #add;
border-right: 1px solid #add;
border-bottom: 1px solid #add;
padding: 10px;
}

.nav-tabs{
margin-bottom: 0;
}

#frm{
border: solid gray 1px;
width: 55%;
border-radius: 5px;
margin: 100px auto;
background: white;
padding: 50px;
}

#btn{
color:#fff;
background: #337ab7;
padding: 5px;
margin-left: 69%;
}
#user{
color:black;
}
#pass{
color:black;
}
#phone{
color:black;
}
#partySize{
color:black;
}
#notes{
color:black;
}
th{
text-align: center;
}
table{
background:yellow;
}
  </style>
</head><body>

<div class="container">
<div class="page-header">
<h1 style="text-align: center;">Don't Queue, You</h1>
</div>
<div class="jumbotron">
<p style="text-align: center;"><img style="width: 559px; height: 342px;" alt="" src="Photos/dance-club.jpg"><br>
&nbsp;</p>
<form action="Delete.php" method = "post">
<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="vertical-align: top; background-color: rgb(46, 45, 136); text-align: center;"><br>
      </td>
      <td style="vertical-align: top; background-color: rgb(46, 45, 136); text-align: center; width: 33%;"><?php echo "<table style='border: solid 1px black;'>";
echo "<tr><th>username</th><th>Party Size</th><th>Notes</th><th>Notes</th></tr>";

class TableRows extends RecursiveIteratorIterator {
function __construct($it) {
parent::__construct($it, self::LEAVES_ONLY);
}

function current() {
return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
}

function beginChildren() {
echo "<tr>";
}

function endChildren() {
echo "</tr>" . "\n";
}
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "queue";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT username, phone, partysize, notes FROM myqueue");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
echo $v;
}
}
catch(PDOException $e) {
echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
      <br>
</td>
      <td style="vertical-align: top; background-color: rgb(46, 45, 136); text-align: center;"><br>
      </td>
    </tr>
  </tbody>
</table>
<p style="text-align: center;"><br>
</p>
<br>
<p> <input class="btn btn-danger" value="Delete" type="submit"> </p>
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body></html>
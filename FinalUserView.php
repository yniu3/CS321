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
color:white;
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
  </style>
</head><body>
   
<div class="container">
<div class="page-header">
<h1 style="text-align: center;">Don't Queue, You</h1>
</div>
<div class="jumbotron">
<p style="text-align: center;"><img style="width: 900px; height: 342px;" alt="" src="Photos/queueing.gif"><br>
</p>
<div>
<form action="Delete.php" method="post">
<div style="text-align: left;"> </div>
<p style="text-align: left;"> &nbsp;</p>

<div class="container">
    <label><b>There are</b></label>
	<label><b><?php 
	$connect=mysqli_connect("localhost","root","","queue");
	$all = "SELECT * FROM `myqueue`" or die(mysql_error());
	$result=mysqli_query($connect,$all);
	$count=mysqli_num_rows($result);
	echo  "<h2>$count</h2>";
	?></b></label>
	<label<b>people in front of you in line</b></label>
  </div>


<p style="text-align: left;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <br>
</p>
<br>
<p><br>
</p>
<p> <br>
</p>
</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body></html>

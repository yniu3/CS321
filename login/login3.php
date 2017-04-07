<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type="text/css" href = "style.css">
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="EI=edge">
<meta name="viewpoint" content="width = device-width, initial-scare =1">
<title>Buttons</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
.jumbotron{
	background-color:#2E2D88;
	color:white;
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
body{
	background: #eee;
	}

#frm{
	border: solid gray 1px;
	width: 50%;
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
</style>

</head>
<body>
	
<div class="container">	

<div class="page-header">
<h1>Don't Queue, You</h1>
</div>

<div class="jumbotron"> 

	<p>A site where you queue yourself inline</p>
	<div id="frm">
		<form action="process.php" method = "POST">
		<p>testing</p>
			<p>
				<label> Username: </label>
				<input type="text" id="user" name="user"/>
			</p>
			<p>
				<label> Password: </label>
				<input type="password" id="pass" name="pass"/>
			</p>
			<p>
				<input type="submit" id="btn" value="Login"/>
				<a href="#" class="btn btn-default btn-lg" role="button">Howbout da</a>
			</p>
			</form>
	</div>
	<p>
		<a href="#" class="btn btn-default btn-lg" role="button">Howbout da</a>

		<button type="submit" class="btn btn-danger" role="button">Button</button>

		<input type="button" value="info" class="btn btn-info">
		<button type="submit" class="btn btn-lg btn-sm">Primary</button>
		<button type="submit" class="btn btn-success btn-xs">Success</button>
		<button type="submit" class="btn btn-warning btn-lg">Warning</button>
		<button type="submit" class="btn btn-link btn-lg">Link</button>

		<button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary</button>



		<a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>

		<div class="btn-group btn-group-lg" role="group">
			<button type="button" class="btn btn-default">Small</button>
			<button type="button" class="btn btn-default">Medium</button>
			<button type="button" class="btn btn-default">Large</button>
		</div>
	</p>

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script> 

</body>
</html>

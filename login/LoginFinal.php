<!DOCTYPE html>
<html lang="en"><head>



<link rel="stylesheet" type="text/css" href="style.css">


<meta charset="UTF-8">


<meta http-equiv="X-UA-Compatible" content="EI=edge">


<meta name="viewpoint" content="width = device-width, initial-scare =1"><title>Login</title>




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
</style></head><body>
<div class="container">
	<div class="page-header">
		<h1>Don't Queue, You</h1>
	</div>
	<div class="jumbotron">
		<p>Your Venue Here</p>
		<div>
			<form action="process.php" method="post">
			<p> <label>Username:</label> &nbsp;&nbsp; <input id="user" name="user" type="text"> </p>

				<p> <label>Password:</label>&nbsp; &nbsp;&nbsp; <input id="pass" name="pass" type="password"> </p>
				<p> <label>Contact Info:</label> <input id="phone" name="phone" type="text"> </p>
				<p> <label>Party Size:</label>&nbsp;&nbsp; &nbsp; <input id="partySize" name="partySize" type="text"> </p>
				<p> <label>Notes:</label>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp; &nbsp; <input id="notes" name="notes" type="text"> </p>
					<p> <input class="btn btn-success" value="Submit" type="submit">&nbsp; <a href="http://localhost/Login/register.php"><small>Register</small></a>
					</p>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!-- Use downloaded version of Bootstrap -->

	<script src="js/bootstrap.min.js"></script>
</body></html>

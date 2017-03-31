<?php
	//Get values passed from form in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost", "root", "");
	mysql_select_db("loginVenue");

	$result = mysql_query("select * from Venues where username = '$username' and password = '$password'") or die("failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	if(($row['username'] == $username) && ($row['password']==$password)){
		echo "Login success ".$row['username'];
	}else{
		echo "Login failed";
	}
?>
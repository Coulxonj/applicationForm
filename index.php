<?php 
	include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
<html>
<head>
<title>My project</title>
<a href="register.php"></a>
</head>

//link to the db

$host="localhost";
$user="root";
$passsword="";
$con=mysql_connect($host,$user,$password);
if(!$con){
	echo '
	';
	$db=mysql_select_db("registration",$con);
	$=mysql_query("SELECT",$db);
}
else {
	echo '
	';
}
</html>
?>
<!DOCTYPE html>
<html>
<head>
	<title>MYSQL Connectivity</title>
</head>
<body>


<?php


$con = mysql_connect("localhost","root","");

if(!$con) {
	echo 'Could not connect'. mysql_error();
}
	echo 'connected successfully';
	mysql_select_db('suman', $con);
?>



</body>
</html>
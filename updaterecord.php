<?php

require('connection.php');

	$update2 = $_GET['update'];

if(isset($_POST['submit2']))
	{
		$editfname = $_POST['firstnameEdit'];
		$editlname = $_POST['lastnameEdit'];
		$editemail = $_POST['emailEdit'];
		$editaddress = $_POST['addressEdit'];

		echo $editfname;
		echo $editlname;
		echo $editaddress;
		echo $editemail;

		$sqlquery = "UPDATE form set fname='$editfname', lname='$editlname', email='$editemail', address='$editaddress' where id = '$update2'";

		$edited = mysql_query($sqlquery);

		if ($edited)
		{
			echo "Data Edited or updated successfully";
			header("Location: indexview.php");

		}

	}


<?php

require('connection.php');


	

if(isset($_POST['submit2']))
	{
		$update = $_GET['update'];

		$editfname = $_POST['firstnameEdit'];
		$editlname = $_POST['lastnameEdit'];
		$editemail = $_POST['emailEdit'];
		$editaddress = $_POST['addressEdit'];

		echo $editfname;
		echo $editlname;
		echo $editaddress;
		echo $editemail;

		$sqlquery = "update form set fname='$editfname', lname='$editlname', email='$editemail', address='$editaddress' where id = '$update'";
		echo $sqlquery;
		//die();

		$edited = mysql_query($sqlquery);

		echo $edited;

		if ($edited)
		{
			echo "Data Edited or updated successfully";
			
			header("Location: indexview.php");

		}

	}


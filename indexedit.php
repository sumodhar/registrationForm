<link rel="stylesheet" type="text/css" href="css/style.css">

<?php

require('connection.php');

if(isset($_GET['update'])) {
	$update = $_GET['update'];

	// echo $update;

	$select2 = mysql_query("select * from form where id = '$update'"); 

	while($update_record = mysql_fetch_array($select2))
	{
		$fname2 = $update_record['fname'];
		$lname2 = $update_record['lname'];
		$email2 = $update_record['email'];
		$address2 = $update_record['address'];

	}
}

?>
<div id="formedit">
<form action="" method="POST" name="formedit">
First Name: <input type="text" name="firstnameEdit" value="<?php echo $fname2; ?>"><br><br>
Last Name: <input type="text" name="lastnameEdit" value="<?php echo $lname2; ?>"><br><br>
Email:	 <input type="text" name="emailEdit" value="<?php echo $email2; ?>"><br><br>
Address: <input type="text" name="addressEdit" value="<?php echo $address2; ?>"><br><br>
<input type="submit" name="submit2" value="Update">

</form>
</div>

	<?php

		$update = $_GET['update'];


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
?>
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
<form action="updaterecord.php" method="POST" name="formedit">
First Name: <input type="text" name="firstnameEdit" value="<?php echo $fname2; ?>"><br><br>
Last Name: <input type="text" name="lastnameEdit" value="<?php echo $lname2; ?>"><br><br>
Email:	 <input type="text" name="emailEdit" value="<?php echo $email2; ?>"><br><br>
Address: <input type="text" name="addressEdit" value="<?php echo $address2; ?>"><br><br>
<input type="submit" name="submit2" value="Update">

</form>
</div>


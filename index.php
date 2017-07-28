<?php require('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Php Forms</title>
<style type="text/css">
	.error {
		color: blue;
	}
</style>

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>


<?php 

if(isset($_POST['submit']))
{
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	$sql = "insert into form values ('', '$fname', '$lname', '$email', '$address')";

	$retval = mysql_query($sql);

	if (!$retval)
	{
		die ('Data not inserted'. mysql_error());
	}
	echo "Data entered successfully";

}



 ?>


<?php

$fname=$lname=$email=$address="";
$fnameError=$lnameError=$emailError=$addressError="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["firstname"])) {
    $fnameError = "First Name is required";
  } else {
    $fname = test_input($_POST["firstname"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameError = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST['lastname'])) {
  	$lnameError = "Last Name is required";
  } else {
  	$lname = test_input($_POST['lastname']);

  	if(!preg_match("/^[a-zA-Z ]*$/",$lname)) {
  		$lnameError = "Only letters and white space allowed";
  	}
  }

  
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["address"])) {
    $addressError = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
      $addressError = "Address can contain only simple format"; 
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<div id="formlayout">

	<h2>Form Values Insert, Update and delete</h2>
	<p><span class="error">* required field.</span></p>
	<br>

	<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

	First Name : <input type="text" name="firstname"><span class="error">* <?php echo $fnameError;?></span>
	<br><br>

	Last Name : <input type="text" name="lastname"><span class="error">* <?php echo $lnameError;?></span>
	<br><br>

	E-mail ID : <input type="text" name="email"><span class="error">* <?php echo $emailError;?></span>
	<br><br>

	Address : <input type="text" name="address"><span class="error">* <?php echo $addressError;?></span>
	<br><br>

	<input type="submit" name="submit" value="submit">

	</form>

</div>


</body>
</html>
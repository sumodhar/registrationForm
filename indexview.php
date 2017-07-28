<?php require('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data View</title>
<style type="text/css">
	
	table {
		width: inherit, cellspacing: 10; border-width: 6px; border-style: ridge;
	}

	table, th, td {
    margin: auto;
    border: 1px solid black;
    border-collapse: collapse;
    border-color: lightblue;
}
	th,td {
		padding: 15px;

</style>

<script type="text/javascript">
		
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>



</head>
<body>



<table>
	<tr>
		<th>ID</th>
		<th>First Name </th>
		<th>Last Name </th>
		<th>Email ID </th>
		<th>Address</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>



<?php

$query = "select * from form";

$select = mysql_query($query);

while($fetch=mysql_fetch_array($select))
{
	$id = $fetch['id'];
	$fname1 = $fetch['fname'];
	$lname1 = $fetch['lname'];
	$address1 = $fetch['address'];
	$email1 = $fetch['email'];


?>

	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $fname1; ?></td>
		<td><?php echo $lname1; ?></td>
		<td><?php echo $email1; ?></td>
		<td><?php echo $address1; ?></td>
		<td><a href="indexedit.php?update=<?php echo $id; ?>">Edit</a></td>
		<td><a href="indexdelete.php?id=<?php echo $id; ?>" onclick='confirmationDelete(this);return false;'>Delete</a></td>

	</tr>

<?php

}

?>


</table>


</body>
</html>
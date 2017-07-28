<?php

require('connection.php');


if(isset($_GET['id'])!="")
{
	$delete = $_GET['id'];

	$delete = mysql_query("delete from form where id = $delete");

	if($delete)
	{
		echo "Data has been deleted successfully";
		header("Location: indexview.php");
	}
}



?>
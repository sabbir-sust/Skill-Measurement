<?php
	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "skill";


	try{
	$con = new mysqli($servername, $username, $password, $dbname);
	}catch(Exception $ex)
	{
		echo $ex->getMessage();
	}


?>

<?php

	 $posts = mysqli_query($con , "SELECT * FROM post");

?>
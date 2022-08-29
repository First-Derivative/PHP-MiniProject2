<?php 

	$servername = "dbprojects.eecs.qmul.ac.uk";
	$username = "mah35";
	$password = "QYJVsXru2jZCC";
	$dbname = "mah35";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
	 die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		$sql = "DELETE FROM blogs WHERE ID=1;";
	 	if($conn->query($sql) === TRUE) {
    		echo "query successfully";
		}
		else
		{
			echo "Error: " . $conn->error;
		}
	}
?>
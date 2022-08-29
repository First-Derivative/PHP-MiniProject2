<?php
	$servername = "dbprojects.eecs.qmul.ac.uk";
	$username = "mah35";
	$password = "QYJVsXru2jZCC";
	$dbname = "mah35";
	$title = $_POST["postTitle"];
	$text = $_POST["postText"];
	$date = date("Y-m-d H:i:s");

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
		
	$command = "INSERT INTO blogs (title, text, timeStamp) VALUES('$title','$text', '$date');";

	$query = mysqli_query($conn, $command);
	
	mysqli_close($conn);
	header("Location: viewBlog.php?show=all");
?>

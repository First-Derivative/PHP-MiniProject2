<?php
	 if($_SERVER["REQUEST_METHOD"]== "POST")
	 {
	 $servername = "dbprojects.eecs.qmul.ac.uk";
	 $username = "mah35";
	 $password = "QYJVsXru2jZCC";
	 $dbname = "mah35";
	 $user = $_POST["email"];
	 $pass = $_POST["pass"];

	 $conn = new mysqli($servername, $username, $password, $dbname);
	 if ($conn->connect_error)
	 {
		 die("Connection failed: " . $conn->connect_error);
	 }

	 $query = mysqli_query($conn, "SELECT firstName, lastName,ID FROM USERS WHERE email='$user' and password='$pass'");
	 $row = mysqli_fetch_array($query);


	 if (mysqli_num_rows($query) != 0)
	 {
		session_start();
		$_SESSION['UserID'] = $row['ID'];
		$_SESSION['UserFName'] = $row['firstName'];
		$_SESSION['UserLName'] = $row['lastName'];
		
		mysqli_close($conn);
		header("Location: viewBlog.php");
		 
	 }
	 else
	 {
		 mysqli_close($conn);
		 header('Location: loginError.html');
	 }
	 }
?>

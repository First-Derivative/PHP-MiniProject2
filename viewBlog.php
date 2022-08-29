<!DOCTYPE html>
<html>
	<head>
	<title>Ashraff's Blog</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="icon" href="favicon.ico">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="viewBlog.php?show=all">Blog</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="wrapper">
			
			<!-- HEADER -->
			<header class="header">
				<span id="headerText">Ashraff's Blog</span>
			</header>
		    <article class="main">
			
			<!-- MAIN COLUMN -->
				<div class="card text-center">
					<div class="card-header">
						<h3>Blog Entries</h3>
					</div>
					<div class="card-body">
						<?php 
							session_start();
							
							function buildBlog($title, $text, $date)
							{
								$str = "<div class=\"card\" style=\"width: 100%;\" id=\"blogPost\"><div class=\"card-body\" id=\"blogBody\"><h4 class=\"card-title\">$title</h4><h5 class=\"card-subtitle mb-2 text-muted\">Posted on:$date</h5><p class=card-text\">$text</p></div></div>";
								
								echo $str;
								echo "<br>";
//								echo "$title $text $date";
							}
						
							function fetchBlogs($period)
							{
								$servername = "dbprojects.eecs.qmul.ac.uk";
                 				$username = "mah35";
                 				$password = "QYJVsXru2jZCC";
                 				$dbname = "mah35";
								
								$conn = new mysqli($servername, $username, $password, $dbname);
                 				if ($conn->connect_error)
                 				{
                     				die("Connection failed: " . $conn->connect_error);
								}
								
								$sql = "SELECT * FROM blogs";
								switch ($period)
								{
									case "march2019":
										$sql = $sql. " WHERE timeStamp >= '2019-03-01 00:00:00' AND timeStamp < '2019-04-01 00:00:00' ORDER BY timeStamp DESC;";
										break;
									case "february2019":
										$sql = $sql. " WHERE timeStamp >= '2019-02-01 00:00:00' AND timeStamp < '2019-03-01 00:00:00' ORDER BY timeStamp DESC;";
										break;
									case "january2019":
										$sql = $sql. " WHERE timeStamp >= '2019-01-01 00:00:00' AND timeStamp < '2019-02-01 00:00:00' ORDER BY timeStamp DESC;";
										break;
									case "december2018":
										$sql = $sql. " WHERE timeStamp >= '2018-12-01 00:00:00' AND timeStamp < '2019-01-01 00:00:00' ORDER BY timeStamp DESC;";
										break;
									default:
										$sql = $sql. " ORDER BY timeStamp DESC;";
										break;
								}
																
								$result = $conn->query($sql);

								if($result->num_rows > 0)
								{
									while($row = $result->fetch_assoc()) {
										buildBlog($row["title"],$row["text"], $row["timeStamp"]);
//										echo $row['title'];
									}
								}
								else 
								{
									echo "<h4> No blog entries found </h4";
								}
							}

							fetchBlogs($_GET["show"]);
						?>
					</div>
				</div>
		  	</article>
			
			<!-- LEFT SIDE ASIDE -->
			<aside class="aside aside-1">

				<div class="card" style="margin-bottom: 5em;">
					<div class="card-header">
						<h4 style="text-align: center;">Archive</h4>
						<p style="text-align: center; font-size: 95%;">Sort by month:</p>
					</div>
						<ul class="list-group list-group-flush" id="month">
							<li class="list-group-item"><a href="viewBlog.php?show=all">Show All</a></li>
							<li class="list-group-item"><a href="viewBlog.php?show=march2019">March 2019</a></li>
							<li class="list-group-item"><a href="viewBlog.php?show=february2019">February 2019</a></li>
							<li class="list-group-item"><a href="viewBlog.php?show=january2019">January 2019</a></li>
							<li class="list-group-item"><a href="viewBlog.php?show=december2018">December 2018</a></li>
						</ul>
				</div>
				
				<div class="card">
						<h4 class="card-header" style="text-align: center;">Social Media</h4>
  						<div class="card-body">
							<p class="card-text" style="text-align: center;">Share my blog entries on your social media in order to spread the good word of Ashraff Hatz</p>
							<div id="share-buttons" style="margin-top: 2em;">
								<!-- Facebook --> <a href="https://www.facebook.com/sharer.php?u=http://webprojects.eecs.qmul.ac.uk/mah35/portfolio/viewBlog.php?show=all" target="_blank"><img src="https://4.bp.blogspot.com/-raFYZvIFUV0/UwNI2ek6i3I/AAAAAAAAGSA/zs-kwq0q58E/s1600/facebook.png" alt="Facebook" /></a> 
								
								<!-- Twitter --> <a href="https://twitter.com/share?url=http://webprojects.eecs.qmul.ac.uk/mah35/portfolio/viewBlog.php?show=all" target="_blank"><img src="https://4.bp.blogspot.com/--ISQEurz3aE/UwNI4hDaQMI/AAAAAAAAGS4/ZAgmPiM9Xpk/s1600/twitter.png" alt="Twitter" /></a>
								
								<!-- Reddit --> <a href="http://reddit.com/submit?url=http://webprojects.eecs.qmul.ac.uk/mah35/portfolio/viewBlog.php?show=all" target="_blank"><img src="https://4.bp.blogspot.com/-1-mZEa1eiyc/UwNI4JytiFI/AAAAAAAAGSs/AoKmBkkJR-s/s1600/reddit.png" alt="Reddit" /></a>
								
								<!-- Email --> <a href="mailto:?Subject=A%20Cool%20Site&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://webprojects.eecs.qmul.ac.uk/mah35/portfolio/viewBlog.php?show=all"><img src="https://4.bp.blogspot.com/-njgKtNLrPqI/UwNI2o-9WfI/AAAAAAAAGR4/f8da1gBgyLs/s1600/email.png" alt="Email" /></a> </div>
						</div>
				</div>
			</aside>
			
			<!-- RIGHT SIDE ASIDE -->
		  	<aside class="aside aside-2">
				<div class="card" style="margin-bottom: 5em;">
						<h4 class="card-header" style="text-align: center;">Blog Functions</h4>
  						<div class="card-body">
							<?php 
								session_start();
							?>
							<?php if(isset($_SESSION['UserID'])): ?>
							<?php 
								echo "<p class=\"card-text\" style=\"text-align: center;\">Welcome, ".$_SESSION['UserFName']." ".$_SESSION['UserLName'] ."</p>";
							?>
								<br>
								<a href="addPost.html" class="btn btn-primary">Add Entry</a>
								<a href="logout.php" class="btn btn-danger">Logout</a>
							<?php else: ?>
								<a href="login.html" class="btn btn-primary">Login</a>
							<?php endif; ?>
						</div>
				</div>
			</aside>
		</div>
		<footer class="footer">
			<h5>Copyright Ashraff Hatz 2019 &copy;</h5>
		</footer>
	</body>
</html>
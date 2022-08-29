<!DOCTYPE html>
<html>
	<head>
	<title>Ashraff's Portfolio</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<span id="headerText">Ashraff's Portfolio</span>
			</header>
		    <article class="main">
			
			<!-- MAIN COLUMN -->
				<div class="card text-center">
					<div class="card-header">
						<h3>About Me</h3>
					</div>
					<div>
						<div class="row" style="margin-top: 2em;">
							<div class="col-sm" style="padding-right: 0em;">
								<figure>
									<img src="https://i.imgur.com/yMVHpfA.jpg" alt="">
									<figcaption>My yearbook photo</figcaption>
								</figure>
							</div>
							
							<div class="col-sm" id="bodyText" style="padding-left: 0em;">
								<p>I am a 20 year old university student who has a fondness for programming and mathematics. This dual interest has lead me to my current pursuit for a computer science degree. I was born in Singapore but lived in Malaysia for most of my life. I'm half Austrian but I've chosen to study in the UK in order to improve my englsh lmao. I am a dedicated student who's looking for exciting opportunities to expand my domain of knowledge in the techn industry. I've had experience working in teams during my 5 day sailing trip for the Gold Duke of Edinburgh award and I've managed and run my own business team for my Junior Achievement challenge.
								</p>
							</div>
						</div>


					</div>
					<div class="card-body" style="font-size: 95%; margin-top: 2em;">
						<h4 class="card-title" style="text-align:left"><strong>Education</strong></h4>
						<br>
						<table class="table">
							<thead>
							<tr>
							  <th scope="col">Year</th>
							  <th scope="col">Institution</th>
							  <th scope="col">Qualification</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							  <th scope="row">2016-2018</th>
							  <td>Nexus International School Malaysia</td>
							  <td>IB Diploma</td>
							</tr>
							<tr>
							  <th scope="row">2018-2021</th>
							  <td>Queen mary University of London</td>
							  <td>BSc Computer Science</td>
							</tr>
							<tr>
							  <th scope="row">2021-2023</th>
							  <td>Somewhere in Europe</td>
							  <td>MSc Mathematics</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
		  	</article>
			
			<!-- LEFT SIDE ASIDE -->
			<aside class="aside aside-1">

				<div class="card" style="margin-bottom: 5em;">
					<div class="card-header">
						<h4 style="text-align: center;">Experience</h4>
					</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">2018-2019 - Intern - LK Designs</li>
							<li class="list-group-item">2017-2018 - Intern - Regen Plc</li>
							<li class="list-group-item">2016-2018 - Duke of Edignburgh International Awards</li>
							<li class="list-group-item">2016-2018 - Junior Achievement Program</li>
						</ul>
				</div>
				
				<div class="card">
						<h4 class="card-header" style="text-align: center;">Skills</h4>
  						<div class="card-body">
  						    <ul class="list-group list-group-flush">
								<li class="list-group-item">Java</li>
								<li class="list-group-item">Python</li>
								<li class="list-group-item">Premier</li>
								<li class="list-group-item">Adobe Photoshop</li>
								<li class="list-group-item">Linear Algebra</li>
								<li class="list-group-item">Calculus II</li>
						    </ul>
						</div>
				</div>
			</aside>
			
			<!-- RIGHT SIDE ASIDE -->
		  	<aside class="aside aside-2">
				<div class="card" style="margin-bottom: 5em;">
						<h4 class="card-header" style="text-align: center;">Portfolio</h4>
  						<div class="card-body">
							<p class="card-text" style="text-align: center;">Feel free to @ my github.</p>
							<br>
							<a href="https://gist.github.com/paulmillr/2657075" style="text-align: left;">github.com/heisenberg</a>
						</div>
				</div>
				
				<div class="card">
						<h4 class="card-header" style="text-align: center;">Contact</h4>
  						<div class="card-body">
							<br><p class="card-text" style="text-align: center;"><span style="font-weight: bold">Phone: </span>+60123028450</p>
							<br>
							<p class="card-text" style="text-align: center;"><span style="font-weight: bold">Email: </span>ashraff.hatz@gmail.com</p>
							<br><p class="card-text" style="text-align: center;"><span style="font-weight: bold">Location: </span>London</p>
						</div>
				</div>
			</aside>
		</div>
		<footer class="footer">
			<h5>Copyright Ashraff Hatz 2019 &copy;</h5>
		</footer>
	</body>
</html>
<!--Luis Bernardo Ambrosi Rincón Gallardo***2CV20***17/10/23-->
<?php
	if (isset($_POST['submit'])) {
		require_once("db.php");
		$sql = $conn->prepare("INSERT INTO contact_me (uname,email,Msubject,tmessage) VALUES (?, ?, ?, ?)");  
		$uname = $_POST['uname'];
		$email= $_POST['email'];
		$Msubject=$_POST['Msubject'];
		$tmessage=$_POST['tmessage'];

		$sql->bind_param("ssss",$uname, $email,$Msubject,$tmessage); 
		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$conn->close();
	} 
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"> 
	<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
	<header class="header">
	<a href="#" class="logo">Portfolio.</a>
		<nav class="navbar">
			<a href="#home" style="--i:1" class="active">Home</a>
			<a href="#about" style="--i:2">About</a>
			<a href="#skills" style="--i:3" >Skills</a>
			<a href="#contact" style="--i:4" >Contact</a>
			
		</nav>
	</header>
	<section class="home" id="home">
		<div class="home-content">
			<h3>Hello, It's Me</h3>
			<h1>Luis Ambrosi</h1>
			<h3>And I'm a <span class="text"></span></h3>
			<p>Student of the National Polytechnic Institute studying computer systems engineering where I have been able to develop problem solving skills, structured thinking, teamwork skills and leadership.
			</p>
			<a href="#home" class="btn-box">More About Me:</a>
				<div class="home-sci">
					<a href="https://www.linkedin.com/in/luis-bernardo-ambrosi-rincón-gallardo-1796075b" style="--i:7"><i class='bx bxl-linkedin'></i></a>
					<a href="mailto:correo@ejemplo.com" style="--i:8"><i class='bx bxl-gmail'></i></a>
					<a href="https://github.com/LBARG" style="--i:9"><i class='bx bxl-github' ></i></a>
				</div>
			</div>
			
	</section>
	<section class="about" id="about">
		<div class="about-img">
			<img src="146e42d7054ab800981b529cdc5714f1.png">
		</div>
		<div class="about-text">
		<h2>About <span>Me</span></h2>
			<h4>FullStack Developer</h4>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.

				<br> commodo ligula eget dolor. Aenean massa.
				
				<br> sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				
				<br> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
				<br>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro.

				<br>Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca.

				<br>Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe

				</p>me" class="btn-box">More About Me</a>
		</div>
	</section>
	<h1 class="sub-title" id="skills">My <span>Skills</span></h1>
	<section>
		<div class="container1">
			<h1 class="heading1">Technical Skills</h1>
			<div class="Technical-bars">
				<div class="bar"><i style="color: #0ef;" class='bx bxl-html5'></i>
					<div class="info">
						<span>HTML</span>
					</div>
					<div class="progress-line html">
						<span></span>
					</div>
				</div>
				<div class="bar"><i style="color: #0ef;" class='bx bxl-css3' ></i>
					<div class="info">
						<span>CSS</span>
					</div>
					<div class="progress-line css">
						<span></span>
					</div>
				</div>
				<div class="bar"><i style="color: #0ef;" class='bx bxl-javascript'></i>
					<div class="info">
						<span>Javascript</span>
					</div>
					<div class="progress-line javascript">
						<span></span>
					</div>
				</div>
				<div class="bar"><i style="color: #0ef;" class='bx bxl-java' ></i>
					<div class="info">
						<span>Java</span>
					</div>
					<div class="progress-line java">
						<span></span>
					</div>
				</div>
				<div class="bar"><i style="color: #0ef;" class='bx bxl-react' ></i>
					<div class="info">
						<span>React</span>
					</div>
					<div class="progress-line react">
						<span></span>
					</div>
				</div>
			</div>
		</div>

			<div class="container1">
				<h1 class="heading1">Professional Skills</h1>
				<div class="radial-bars">
					<div class="radial-bar">

						<svg x="0px" y="0px" viewBox="0 0 200 200">
							<circle class="progress-bar" cx="100" cy="100" r="80"></circle>
							<circle class="path path-1" cx="100" cy="100" r="80"></circle>
						</svg>
						<div class="percentage">90%</div>
						<div class="text">Creativity</div>
					</div>
					<div class="radial-bar">

						<svg x="0px" y="0px" viewBox="0 0 200 200">
							<circle class="progress-bar" cx="100" cy="100" r="80"></circle>
							<circle class="path path-2" cx="100" cy="100" r="80"></circle>
						</svg>
						<div class="percentage">65%</div>
						<div class="text">Communication</div>
					</div>
					<div class="radial-bar">

						<svg x="0px" y="0px" viewBox="0 0 200 200">
							<circle class="progress-bar" cx="100" cy="100" r="80"></circle>
							<circle class="path path-3" cx="100" cy="100" r="80"></circle>
						</svg>
						<div class="percentage">75%</div>
						<div class="text">Problem Solving</div>
					</div>
					<div class="radial-bar">

						<svg x="0px" y="0px" viewBox="0 0 200 200">
							<circle class="progress-bar" cx="100" cy="100" r="80"></circle>
							<circle class="path path-4" cx="100" cy="100" r="80"></circle>
						</svg>
						<div class="percentage">85%</div>
						<div class="text">Team Work</div>
					</div>
				</div>
			</div>
	</section>
	<section class="contact" id="contact">
	<div class="contact-text">
			<h2>Contact <span>Me</span></h2>
			<h4>Let's Work Togheter</h4>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
			<div class="contact-list">
				<li><i class='bx bxs-send'></i>lambrosi1800@alumno.ipn.mx</li>
			</div>
		</div>
	</section>
	<section class="form-section" id="form-section">
		<div class="contact-form">
			<form name="frm" method="post" action="">
				<input type="" name="uname" placeholder="Enter Your Name" required>
				<input type="email" name="email" placeholder="Enter Your Email" required>

				<input type="text" name="Msubject" placeholder="Enter Your Subject">
				<textarea name="tmessage" id="" cols="40" rows="18" placeholder="Enter Your Message" required></textarea>
			<input type="submit" name="submit" value="Submit" class="send">	
			</form>
		</div>
	</section>

	<script src="main.js"></script>
</body>
</html>
<!--LBARG-->
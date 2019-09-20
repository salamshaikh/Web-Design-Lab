<!DOCTYPE html>
<html>
<head>
	<title>Smart Grading System | Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> -->
</head>
<body>
	
	<header>
        <h1> SMART GRADING SYSTEM</h1>
        <nav>
            <ul class="nav">
                    <li><a href="index.html">Home</a> </li>
                    <li><a href="about.html">About Us</a> </li>
                    <li><a href="registration.html">Register</a> </li>
                    <li><a href="login.php">Login</a> </li>
                    <li><a href="contact.html">Contact Us</a> </li>
            </ul>
        </nav>
	</header>

	<main>
		<section>
		<article class="col-2">
			<h2>Contact Us</h2>
			<fieldset>
			<legend>Fill the details</legend>	
			<form action="" method="post">
			<p>Name:<br>
			<input id="user-name" type="text" placeholder="Name" name="user-name">
			<br>
				
			Email <br><input id="user-email" type="email" name="user-email" 
			value="" placeholder="username@example.com" required="required"><br>

			Subject<br>	<input id="subject" type="text" name="subject" value=""
			placeholder="A short description about the matter" required="required">
			<br>
				
			Message<br>	<textarea id="message" name="message" rows="3" cols="40" 
			required="required"></textarea></p>
			<input id="submit-btn" type="submit" name="con-submit" value="Submit">		
			</form>	
			<script src="js/validate.js"></script>
	
			</fieldset>
		</article>
		<article class="col-2">
		<div class="links">
				<h2>Get Connected</h2>
				<img src="img/map.png" widht="500px" height="300px">
				<a href="https://facebook.com"><i class="fab fa-facebook"></i>Facebook</a>
				<a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
				<a href="https://linkedin.com"><i class="fab fa-linkedin"></i>LinkedIn</a>
				<a href="https://github.com"><i class="fab fa-github"></i>Github</a>
				<a href="https://stackoverflow.com"><i class="fab fa-stack-overflow"></i>StackOverflow</a>
		</div>
		</article>	

		</section>
	</main>
	
</body>
</html>
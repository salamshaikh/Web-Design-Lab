<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SMART GRADING SYSTEM</title>
	<style type="text/css">
		#status{
            	
		}
	</style>
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" 
	src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header>
                <h1> SMART GRADING SYSTEM</h1>
            
    </header>    
    <section >
    <article class="login">
        <div class="card">
            <h2>Login</h2> 
			<?php			
		    if($_POST)
		    {
			$username=$_POST['username'];
			$pass=$_POST['pass'];
			
			# remove this if($username=='abdulsalam' && $pass='12345')
			include("checkdb.php");
			$sql = "select * from users where
			 rollno='$username' and password='$pass'";
			$result = $conn->query($sql);

			if($result->num_rows == 1)
			{
		    ?>
			<script>
			$(function () {
			$('#status').css('background-color','blue');	
			$('#status').css('color','yellow');
			$('#status').html('<center>Login Successful !			 <br/> Redirecting to home page</center>').fadeIn().delay(2000).fadeOut();
			});
			</script>
			<?php
				$_SESSION['user']=$username;
				header("Refresh:1,url=home.php");
			}
			else {
			?>
				<script>
				$(function () {
					$('#status').css('background-color','yellow');
                    $('#status').css('color','blue');
                    $('#status').html('<center>Incorrect username or password!<br> Please try again.</center>').fadeIn().delay(2000).fadeOut();
				});
				</script>
			<?php
			    }
			}			
	        ?>
	        <form class="form" method="post" action="login.php">
				<table>
				<tr><td>Roll no  </td>
				<td><input type="text" name="username" id="username"
                 placeholder="Username" required /></td>
				<tr>
					<td>Password</td>
				<td><input type="password" name="pass" id="pass" 
				placeholder="Password" required /></td>
				<tr><td colspan=2>
				Dont have an account, <a href="registration.html">register</a> here</td>
				<tr>
				<td colspan=2>
				<input type="submit" id="submit" value="Log In"/>
				</td>
				</tr>
				<tr>
				<td colspan=2>
					<div id='status'>
					</div>		
				</tr>
	        </form>	  
        </div>
        </article>
    </section>
</body>
</html>
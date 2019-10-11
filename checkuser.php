<style>
.success{
	color: green;
	font-weight: bold;
}
.failure{
	color: red;
	font-weight: bold;
}
</style>
	<?php
	include("checkdb.php");
	if(isset($_POST) && !empty($_POST)){

	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$sql = "SELECT rollno FROM users WHERE rollno = '$username'";
	$result = $conn->query($sql);
	
	if($result->num_rows == 1){
		echo "<div class='failure'>Username is not available
		</div>";
	}	else {
		echo "<div class='success'>Username is available
		</div>";
	}
	}
	?>
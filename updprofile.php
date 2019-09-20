<?php
    session_start();
    include("header.php");
    include("checkdb.php");
    include("functions.php");

    if($_POST['updProfile']){

        $current_user = $_SESSION['user'];
        $name = fix_name($_POST['name']);
        $email = fix_email($_POST['email']);
        $address = fix_address($_POST['address']);
        $password = md5($_POST['password']);
        $dob = $_POST['dob'];

        $sql = "update users set name='$name', email='$email', address='$address',
                password='$password',dob='$dob' where rollno='$current_user' ";
        
        #echo $sql;
        if($conn->query($sql)===TRUE){
            echo "<h2>Profile updated successfully</h2>";
            header("Refresh:2,url=profile.php");
			}		
        else{
            echo "Error Updating".$conn->error;
        }
    }
?>

<?php
    include("checkdb.php");
    include("header.php");
    if($_POST['btn_register']) // if(isset($_POST['btn_register]))
    {
        $rollno = $_POST['rollno'];
        $name = $_POST['sname'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $pwd = $_POST['pwd'];
        $dob = $_POST['dob'];
        $sem = $_POST['sem'];
        $email = $_POST['semail'];
        $dept = $_POST['dept'];
        $batch = $_POST['batch'];

        $sql = "INSERT INTO users (rollno, name, gender, address, password,
        dob, sem, email, dept, batch) values ('$rollno','$name','$gender',
        '$address', '$pwd', '$dob', '$sem', '$email', '$dept', '$batch')";
        
        // echo $sql; // for testing purpose

        if($conn->query($sql)=== TRUE){
            echo "<h2>New record inserted successfully</h2>";
            header("Refresh:2,url=login.php");
        }
        else{
            echo $conn->error;
        }
        
    }
     

?>

<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<meta charset="UTF-8">
<title>SMART GRADING SYSTEM</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
                <h1> SMART GRADING SYSTEM</h1>
                <?php include("nav.php"); ?>
    </header>    
    <section >
        
        <article class="col-1">
             <?php 
           if(isset($_SESSION['user']))
            {
                $current_user = $_SESSION['user'];
                include("checkdb.php");
                
                if(isset($_REQUEST['rollno'])){
                    $sql = "select * from users where rollno='$_GET[rollno]'";    
                }
                else{
                    $sql = "select * from users where rollno='$current_user'";
                }
                // echo $sql;

                $result = $conn->query($sql);
                if($result->num_rows == 1){
                    while($row = $result->fetch_assoc()){       
            ?>
        <form action="updprofile.php" method="post">
            
        <table style="width:50%;">
        <tr><td colspan=2><h2>Profile</h2> </td></tr>
            <tr>
                <td>Roll No</td>
                <td><input type="text" class="form-controls" disabled value="<?php echo $row['rollno']; ?>"></td>
            </tr>
                
            <tr>
                <td>Username</td>
                <td><input type="text" class="form-controls" name="name" value="<?php echo $row['name']; ?>"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input id="pwd" class="form-controls" type="password" name="password" value=""></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input id="repwd" class="form-controls" type="password" name="password" value=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" class="form-controls" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob" class="form-controls"  value="<?php echo $row['dob']; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea class="form-controls" name="address"> <?php echo $row['address']; ?> </textarea></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="updProfile" value="Update"></td>
            </tr>

        </table>
        </form>
        <div id="status"></div>
        <?php
                    }
                }
            }
        else
            {
            header("Refresh:0,url=login.php");
        }
     ?>
            
        </article>
      </section>
</body>


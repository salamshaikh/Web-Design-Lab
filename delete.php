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
        <h2>Dashboard</h2> 
        <article class="col-1">
                <?php 
           if(isset($_SESSION['user']))
            {
                include("checkdb.php");
                
                $sql = "delete from users where rollno='$_REQUEST[rollno]'";    
                if($conn->query($sql)===TRUE){
                    echo "<h2>Profile deleted successfully</h2>";
                    header("Refresh:2,url=viewusers.php");                    
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


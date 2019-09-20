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
                echo "Welcome, dear ".$_SESSION['user'];
            }
        else
            {
            header("Refresh:0,url=login.php");
        }
     ?>
            
        </article>
      </section>
</body>


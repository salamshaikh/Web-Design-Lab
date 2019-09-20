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
        <h2>Users</h2> 
        <article class="col-1">
                <div class="card">
                <?php            
            if(isset($_SESSION['user']))
            {
            include("checkdb.php");
            $sql = "select id,rollno,name,email,batch from users";
            $result = $conn->query($sql);
            echo "<table><th>No</th><th>Roll No</th><th>Full Name</th>";
            echo "<th>Email</th><th>Batch</th>";
            echo "<th>Edit </th><th>Delete</th>";
                
            if($result->num_rows > 0){
                $count = 1;
                // print the output of each row
                while($row = $result->fetch_assoc()){
                   
                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>".$row['rollno']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['batch']."</td>";
                    echo "<td><a href='profile.php?rollno=".$row['rollno']."'>Edit</a></td>";
                    echo "<td><a href='delete.php?rollno=".$row['rollno']."'>Delete</a></td>";
                    echo "</tr>";
                    $count++;
                }
                echo "</table>";
            }
        }
        else
        {
            header("Refresh:0,url=login.php");
        }
     ?>
            </div>
        </article>
      </section>
</body>


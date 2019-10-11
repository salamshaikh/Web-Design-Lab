<!DOCTYPE html>
<html>
<head>
    <style>
    table{
        width: 50%;
        border-collapse: collapse;
    }
    table th,tr{
        padding: 5px;
        border: 1px solid black;
    }
    th{
        text-align: left;
    }
    </style>
</head>

<body>
<?php
    $q = $_GET['q'];

    include("checkdb.php");

    $sql = "select * from users where name LIKE '".$q."'";
    
    $result = $conn->query($sql);
    echo "<table>";
    echo "<tr><th>Name</th><th>Batch</th><th> Email </th></tr>";
    
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['rollno']."</td>";
        echo "<td>".$row['batch']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $conn->close();
?>
</body>
</html>
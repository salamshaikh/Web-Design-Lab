<?php

require("checkdb.php");
    
if($_POST)
{
    if(isset($_POST['user']))
    {
        $user=strtolower($_POST['user']);
        
        $query="select * from users where rollno='$user'";
        
        $result= $conn->sql($query);
        
        if($result->num_rows==0)
        {
            echo 'true';
        }
        else
        {
            echo 'false';
        }
        
    }
}
?>  
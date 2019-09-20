<?php
    if($_GET['logout']=="yes")
    {
        session_destroy();
        header("Refresh:0,url=login.php");
    }
?>
<?php if($_SESSION['user']==NULL){    ?>
<nav>
    <ul class="nav">
        <li><a href="index.php">Home</a> </li>
        <li><a href="about.php">About Us</a> </li>
        <li><a href="registration.html">Register</a> </li>
        <li><a href="contact.php">Contact Us</a> </li>
        <li><a href="login.php">Login</a> </li>
    </ul>
</nav>
<?php }  else { ?>
    <nav>
    <ul class="nav">
        <li><a href="index.php">Home</a> </li>
        <li><a href="about.php">About Us</a> </li>
        <li><a href="register.php">Register</a> </li>
        <li><a href="viewusers.php">View Users</a> </li>
        <li><a href="profile.php">Profile</a> </li>
        <li><a href="contact.php">Contact Us</a> </li>
        <li><a href="searchinfo.php">Search </a></li>
        <li><a href="logout.php?logout=yes">Logout</a> </li>
    </ul>
</nav>
<?php } ?>
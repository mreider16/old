<?php
session_start();

session_destroy();

//echo "You've been logged out. <a href = 'index.php'>Return</a> to homepage.";

header("location:index.php?msg=" . urlencode('You are logged out'));


?>
<?php

session_start();

$_SESSION['example'] = 2;

if (!isset($_SESSION['example'])) {
    echo "Go back to the login page";
    die;    
}

echo "Click <a href = 'sessionExample2.php'>here</a> for example 2";
echo "<br/ >";
echo $_SESSION['example'];
?>
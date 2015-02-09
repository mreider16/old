<?php
session_start();
if (! isset($_SESSION['username'])) {
    echo "Go back to the login page";
    die;    
}
$link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');

$delete = mysqli_query($link,'DELETE FROM login WHERE username = \'' . $_SESSION['username'] . '\'');

echo "Your account has been deleted. Click <a href = 'index.php'>here</a> to go back to the main page";

//how do I automatically redirect someone to a page instead of clicking a link
?>
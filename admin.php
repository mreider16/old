<?php    
    session_start();
    if (! isset($_SESSION['username'])) {
    echo "Go back to the login page";
    die;    
    }
    
    $link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
    $username = $_POST['accountToDelete'];

    $delete = mysqli_query($link,'DELETE FROM login WHERE username = \'' . $username . '\'');
    
    header("location:homepage.php");
?>
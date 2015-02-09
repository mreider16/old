<?php
    session_start();
    if (! isset($_SESSION['username'])) {
    echo "Go back to the login page";
    die;    
    }
    
    $link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
    $gender = $_POST['gender'];
    $sport = $_POST['sports'];
    
    //echo $gender;
    //echo $sport;
    $tempUsername = $_SESSION['username'];
    
    $insert = mysqli_query($link, "UPDATE login  SET Gender = '$gender', Sport= '$sport' WHERE username = '$tempUsername' ");
    
   
    echo mysqli_error($link);

?>
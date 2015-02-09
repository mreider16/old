<?php

//test
//test

session_start();
if (isset($_SESSION['username'])) {
    header("location:homepage.php");
}
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

//when prevent from logging in on the same computer simultaneously

//future project: make it so when you click on a picture, the database is updated


//complete survey upon registration: store results in database
//generate form dropdown based off list of username: choose one from list of dropdowns and delete them
//php file upload


//how do i add grade in with the courses table
?>

<html>
<body>

<form action="http://localhost:8888/account.php">
<input type="submit" value="Make a new account">
</form>

<form action="http://localhost:8888/login.php">
<input type="submit" value="Login">
</form>


<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>

</body>
</html>
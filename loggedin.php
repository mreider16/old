<html>
<body>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    
$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username && $password)
{
    //should i make the md5 password a session?
    $link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
    $result = mysqli_query($link,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1)
    {
        $rows = mysqli_query($link,"SELECT * FROM login WHERE username = '$username'AND admin =  1");
        $num = mysqli_num_rows($rows);
        if ($num == 1) {
            $_SESSION['admin'] = 1;
        }
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "Welcome " . $_SESSION['username'] . ". Enter the user <a href = 'homepage.php'>homepage</a>";
        //header("location:homepage.php");
        //the header works in the logout page and doesn't work here
    }
    else
        die("That user does not exist");
}
else
{
    echo "Please enter a username and password";
}
}
else {
    echo "You're already logged in";
    }
?>

</body>
</html>
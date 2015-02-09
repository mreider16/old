<html>
<body>
<b>Create a new account</b>

<form action="account.php" method="POST">
<b>Username:</b> 
<input type = "text" name = "username"><br>
<b>Password:</b>
<input type = "password" name = "password">
<input type = "submit">
</form>

<?php
$username = $_POST['username'];
$password = $_POST['password'];
$stU = strlen($username);
$stP = strlen($password);
if($username && $password) {
    
if($stU > 5 && $stP > 5)
{
    $link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
    
//make it so username and password have to be a certain number of characters long

$result = mysqli_query($link,"SELECT * FROM login WHERE username = '$username'");
$num_rows = mysqli_num_rows($result);

echo $num_rows;
echo "<br/ >";

if ($num_rows > 0) {
  echo "This username already exists";
}
else if ($num_rows == 0) {
  echo "Your account has been created!";
  echo "<br/ >";
  $passwordMD = md5($password);
  $insert = mysqli_query($link,"INSERT INTO login (username, password) 
    VALUES ('$username', '$passwordMD')");
    echo $username;
    echo "<br/ >";
    echo $password;
    echo "<br/ >";
    echo "Click to <a href = 'login.php'>Log in</a>";
}

}

else
{
    echo "Enter a username and password at least 5 characters long";
}

}
?>

</body>
</html>
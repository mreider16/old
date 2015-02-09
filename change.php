<html>
<body>

<b>Enter your current username and a new password</b>

<form action="change.php" method="POST">
<b>Username:</b>
<input type = "text" name = "username"><br>
<b>Password:</b>
<input type = "password" name = "password">
<input type = "submit">
</form>

<?php
error_reporting(E_ALL);
//should i have sessions here? on every page?
$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username && $password)
{
    $link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
    
//make it so username and password have to be a certain number of characters long

$result = mysqli_query($link,"SELECT * FROM login WHERE username = '$username'");
$num_rows = mysqli_num_rows($result);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";
//what is mysql fetch array

//echo $num_rows;
echo "<br/ >";
//echo $row['id'];
//echo $id;
echo "<br/ >";


if ($num_rows > 0) {
    echo "Your account has been changed";
  echo "<br/ >";
  $sql = 'UPDATE login SET password = \''.$password.'\' WHERE id = '. $row['id'];
  echo $sql;
  echo "<br/ >";
  
  $update = mysqli_query($link,$sql);
    echo $username;
    echo "<br/ >";
    echo $password;
    echo "<br/ >";
    echo "Click to go back to the <a href = 'homepage.php'>homepage</a>";
}

else if ($num_rows == 0) {
    echo "Enter a valid username";
}

}


?>

</body>
</html>
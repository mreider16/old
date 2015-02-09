<?php

$username = $_POST['username'];
$password = $_POST['password'];




/*
if ($username == 'Marty' and $password == 'password1')
{
    echo 'wecome!';
}
else
{
    echo 'wrong username or password';
}
*/

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

// we connect to localhost at port 3307
$link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connectesssd successfully<br><br>';


//create an account 2 pages: form and submit handler (should check if there has been a username already
//



echo "<br>";
print_r($username);

$insert = mysqli_query($link,"INSERT INTO login (username, password) 
VALUES ('$username', '$password')");


$result = mysqli_query($link,"SELECT * FROM login");

echo (mysqli_num_rows($result));
//it adds another row, but everytime I click return it keeps adding this row. how do i get it to just add once?
//also I have to refresh twice in order for it to show up

//when you delete a row in mySQL the ID's don't go down, so you're skipping one ID
while($row = mysqli_fetch_array($result))
  {
  echo "User name " . $row['id'] . "<br>" . $row['username'] . "<br>" . $row['password'];
  echo "<br>";
  echo "<br>";
  }

mysqli_close($link);

?>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

// we connect to localhost at port 3307
$link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connectesssd successfully<br><br>';

echo "<br>";
//mysqli_query($link,"INSERT INTO login (username, password) 
//VALUES ('ageeeeew', 'wowegeeeefwd')");

//it adds another row, but everytime I click return it keeps adding this row. how do i get it to just add once?
//also I have to refresh twice in order for it to show up
//how to edit a specific row in mySQL with PHP code
//when you delete a row in mySQL the ID's don't go down, so you're skipping one ID

$result = mysqli_query($link,"SELECT * FROM login WHERE username = 'andray'");

echo mysqli_num_rows($result);

echo "<br><br>";

//create an account 2 pages: form and submit handler (should check if there has been a username already)
//login page
//sessions
//update command (change password)
//delete command (delete account)

while($row = mysqli_fetch_array($result))
{
  echo "User name " . $row['id'] . "<br>" . $row['username'] . "<br>" . $row['password'];
  echo "<br>";
  echo "<br>";
}

mysqli_close($link);
 
?>
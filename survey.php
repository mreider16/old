<html>
<body>


<?php
session_start();
if (! isset($_SESSION['username'])) {
    echo "Go back to the login page";
    die;    
}
?>

<form action="surveytaken.php" method="POST">
<p>Select your gender</p>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br>
<p>Select your favorite sport</p>
<select name="sports">
<option value="Basketball">Basketball</option>
<option value="Baseball">Baseball</option>
<option value="Football">Football</option>
<option value="Soccer">Soccer</option>
<option value="Tennis">Tennis</option>
<option value="Golf">Golf</option>
</select>
<br />
<br />
<input type="submit" value="Submit">
</form> 

</body>
</html>
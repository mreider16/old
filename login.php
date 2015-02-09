<html>
<body>

<b>Sign in</b>

<?php
session_start();


session_destroy();
?>

<form action="loggedin.php" method="POST">
<b>Username:</b> 
<input type = "text" name = "username"><br>
<b>Password:</b>
<input type = "password" name = "password">
<input type = "submit">
</form>

</body>
</html>
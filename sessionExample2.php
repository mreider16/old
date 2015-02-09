<?php

session_start();

echo $_SESSION['example'];

session_destroy();


//setcookie($_SESSION['example'], false, time() - 3600);


echo "<br/ >";

echo $_SESSION['example'];

/*
if (isset($_SESSION['example'])) {
    echo "is set";
}

else {
    echo "is not set";
}
*/

?>

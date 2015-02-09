<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "Go back to the login page";
    die;    
}
    echo "Welcome, " . $_SESSION['username'];
    echo "<br />";
    echo "<br />";
    echo "<br />";
?>

<!--
<form action="send.php" method="POST">
    <select name="OneEight">
        <option value="Heat"> Heat</option>
        <option value="Hawks">Hawks</option>
    </select><br><br>
    
    <select name="FourFive">
        <option value="Bulls"> Bulls</option>
        <option value="Nets">Nets</option>
    </select><br><br>
    
    <select name="ThreeSix">
        <option value="Raptors">Raptors</option>
        <option value="Wizards">Wizards</option>
    </select><br><br>

    <select name="TwoSeven">
        <option value="Pacers">Pacers</option>
        <option value="Bobcats">Bobcats</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
-->

<html>
<body>

<?php
    echo "<br /><br /><br /><br /><br /><br />";
    echo "Click <a href = 'change.php'>here</a> to change your password";
    echo "<br/ >";
    echo "Click <a href = 'delete.php'>here</a> to delete your account";
    echo "<br/ >";
    $link = mysqli_connect('localhost', 'mreider16', 'way59car', 'test');
    $tempUsername = $_SESSION['username'];
    $res = mysqli_query($link,"SELECT * FROM login WHERE username = '$tempUsername' AND Sport = \"\" ");
    
    //print_r($res);
    
    $num = mysqli_num_rows($res);
    if ($num == 1)
    {
        echo "Click <a href = 'survey.php'>here</a> to take a short survey";
    }
    echo "<br/ >";
    echo "<br/ >";
    echo "<br/ >";
    echo "<br/ >";
    //SELECT username, courseName FROM login, user_courses, Courses WHERE user_courses.userid = login.id and user_courses.courseid = Courses.id AND Courses.courseName = 'math'
    //table that holds grades in the courses
    //ajax: javascript connecting to sqldatabase
    //interface to add people to courses. when you log in, show courses you're enrolled in
    //new table and join it to course table
    //export sql database
?>


<?php
//make other tables
//fix admin
//message when you delete user
//have to fill in survey if you havn't already

$result = mysqli_query($link,"SELECT * FROM login");
$num_rows = mysqli_num_rows($result);

if ($_SESSION['admin'] == 1) {
    echo "Select a user to delete";
    echo '<form action="admin.php" method="POST"> <select name="accountToDelete">';
    $users = array();

     while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
          echo '<option value=' . $row['username']. '>' . $row['username'] . '</option>';
           $users[] = $row;
           //radio button
    }

    echo "</select>"; 


    foreach ($users as $row) {
           // echo '<input type="radio" name="users" value=' . $row['username']. '>' . $row['username'] .'<br>';
    }
    echo '<input type="submit" value="Submit">';

    echo "</form>"; 

}

    echo "<br/ >";
    echo "<br/ >";
    echo "<br/ >";
    echo "<a href = 'logout.php'>Log out</a>";
?>

</body>
</html>
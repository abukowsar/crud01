<?php
//header('location:home.php');

session_start();

if (array_key_exists('loggedin', $_SESSION))

{
echo "You are in Dashboard";
}

else

{
echo header('location:home.php');
}

?>

<a href="logout.php" >Logout</a>
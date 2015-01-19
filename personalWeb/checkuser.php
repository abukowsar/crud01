<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == "GET")
{
header("location:login.php");
}
if(isset($_POST['email']) && empty($_POST['email'])) {
$_SESSION['msgemail'] = "Email is Required";
header('location:login.php');
}
if(isset($_POST['password']) && empty($_POST['password'])){
$_SESSION['msgpass'] = "Password is Required";
header('location:login.php');
}
$email = $_POST['email'];
echo $email;
$password = $_POST['password'];
echo $password;
//exit;
$link = mysqli_connect("localhost", "root", "", "students");
$query = "SELECT * FROM facebook WHERE `email` = '$email' AND `password` = '$password'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//var_dump($row);
//var_dump($row['username']);
//var_dump($row['password']);
//var_dump($row['email']);
//exit;
if($row)
{
//(SEND Data to the SESSION and GO to The Dashboard)
$_SESSION['id']=$row['id'];
$_SESSION['name']=$row['firstName'];
$_SESSION['email']=$row['email'];
$_SESSION['created']=$row['created'];
header('location: dashboard.php');
}
else
{
//(Redirect to the Login page with a Message)
$_SESSION['msg'] = "Invalid Username and/or Password. If You are not Registered User Please Complete Registration First or Contact with Administrator.";
header('location:login.php');
}




?>


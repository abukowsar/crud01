
<?php

print_r($_POST);
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob = $year.'-'.$month.'-'.$day;
//echo $dob;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];

$hobbies = implode(",", $_POST['hobby']);
//echo $hobbies;

$cities = implode(",", $_POST['city']);
//echo $cities;


$link = mysqli_connect("localhost", "root", "", "personalweb");
            die("Database connection failed: " . mysqli_connect_error());
$query = "INSERT INTO `personalweb`.`users`(`first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `hobby`, `dob`, `city`, `comments`, `created`, `modified`)
                                    VALUES ('$first_name', '$last_name', '$email', '$password', '$phone', '$gender', '$hobbies' '$dob', '$cities' '$comments', NOW(), NOW())";
mysqli_query($link, $query);
//header('location:list.php');
?>
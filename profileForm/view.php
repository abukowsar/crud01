<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 5:03 PM
 */
$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "",
    "students");

$query = "select * from users WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go back to List</a>
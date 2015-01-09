<?php
    include('connect.php');

    $id=$_GET['id'];
    $query="DELETE FROM `students`.`users` WHERE `users`.`id` = $id";
    mysqli_query($con,$query);
    header('location: list.php');
    mysqli_close($con);
?>
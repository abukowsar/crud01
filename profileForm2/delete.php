<?php
    include "config.php";

    $id=$_GET['id'];
    $query="DELETE FROM `students`.`reg_info` WHERE `reg_info`.`id` = $id";
    mysqli_query($con,$query);
    header('location: read.php');
    mysqli_close($con);
?>
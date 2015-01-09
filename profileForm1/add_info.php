<?php
    //print_r($_REQUEST);
    include('connect.php');
    $query="INSERT INTO `students`.`users` (`id`, `firstName`, `lastName`, `phoneNumber`) VALUES ('', '$_POST[fname]', '$_POST[lname]', '$_POST[pnumber]');";

    if(mysqli_query($con,$query))
        echo "Successfully added 1 record into Database";
    else
        die("Error: ".mysqli_errno($con));
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <br />
    <a href="index.html"><b>Back</b></a>
</body>
</html>

<?php mysqli_close($con);?>
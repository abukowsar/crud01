<?php
    include('connect.php');

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($update_id)){
            $sql = "UPDATE users SET firstName='$_POST[fname]',lastName='$_POST[lname]',phoneNumber='$_POST[pnumber]' WHERE id=$update_id";
            mysqli_query($con,$sql);
        }
    }
    $query="SELECT * FROM users";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
<h2 align="center"> List </h2> 

<table border="1" align="center" width="60%">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row){ ?>
        <tr align="center">
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['firstName'] ?></td>
            <td><?php echo $row['lastName'] ?></td>
            <td><?php echo $row['phoneNumber'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="delete.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" colspan="5"><a href="index.html"><b>Add a new record</b></a></td>
        </tr>
    </tfoot>
</table>
</body>
</html>

<?php mysqli_close($con);?>
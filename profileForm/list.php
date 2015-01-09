<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 3:54 PM
 */


$link = mysqli_connect("localhost",
    "root",
    "",
    "students");

$query = "select * from users;";

$result = mysqli_query($link, $query);


//while( $row = mysqli_fetch_assoc($result) ){
//    print_r($row);
//}

//alternative


    //print_r($row);

?>

<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="index.html">Create New</a> </li>
</ul>

<table border="1" width="70%">
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Phone Number</td>
            <td>Action</td>
        </tr>
<?php
        foreach($result as $row){
?>

    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['firstName']?></td>
        <td><?php echo $row['lastName']?></td>
        <td><?php echo $row['phoneNumber']?></td>
        <td> <a href="edit.php">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="softDelete.php?id=<?php echo $row['id']?>">Soft Delete</a></td>
    </tr>

<?php
        }
?>

</table>




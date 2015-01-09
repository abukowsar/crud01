<?php
    include('connect.php');
    $id=$_GET['id'];
    $query="SELECT * FROM `students`.`users` WHERE `users`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Information Form</title>
</head>
<body>
<h2 align="center"> Edit Form </h2> 
<table border="1" width="70%"  align="center" cellpadding="2" cellspacing="0">

<form action="list.php?id=<?php echo $_GET['id'] ?>" method="post">
  <input type="hidden" id="update_id" value="<?php echo $id ?>" />
     <tr> <td> <label>First Name: </label></td>
   <td> <input type="text" name="fname" title="Enter the First Name" value="<?php echo $rows['firstName']?>" required />
    <br /></td></tr>
    <tr> <td> <label>Last Name: </label></td>
    <td><input type="text" name="lname" title="Enter the Last Name" value="<?php echo $rows['lastName']?>" required />
    <br /></td></tr>
   <tr> <td> <label>Phone Number: </label></td>
   <td> <input type="text" name="pnumber" title="Enter the phone number" value="<?php echo $rows['phoneNumber']?>" required />
    <br /></td></tr>
   <tr> <td colspan="2" align="center">
   <input type="submit" value="Update" name="update" />
</form>
</td></tr>
<tr> <td colspan="2" align="left">
<br />
<a href="list.php"><b>Goto List</b></a>
</td></tr>
</table>
</body>
</html>

<?php mysqli_close($con);?>
